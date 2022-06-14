<?php

namespace App\Helpers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;

class MoodleClient
{
    protected $headers = [];

    /**
     * Constructor
     *
     */
    public function __construct()
    {
        $this->headers = [
            'Authorization' => config('services.moodle.token'),
            'Accept' => 'application/json',
            'Content-Type' => 'application/json'
        ];
    }

    /**
     * Creates self
     *
     * @return MoodleClient
     */
    public static function create()
    {
        $self = new self();
        return $self;
    }

    /**
     * Gets all moodle categories
     *
     * @return array
     */
    public function fetchAllCategories()
    {
        $url = config('services.moodle.url') . '/webservice/restful/server.php/core_course_get_categories';
        try {
            $client = new Client();
            $response = $client->request(
                'POST',
                $url,
                [
                    'headers' => $this->headers,
                    'form_params' => [
                        "criteria" => []
                    ]
                ]
            );

            return json_decode($response->getBody());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    public function fetchAllUsers()
    {
        $url = config('services.moodle.url') . '/webservice/restful/server.php/core_user_get_users';

        try {
            $client = new CurlClient();
            $response = $client->request(
                'POST',
                $url,
                [
                    'headers' => $this->getHeaders(),
                    'body' => [
                        "criteria" => []
                    ]
                ]
            );

            return json_decode($response->getResponse());
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * Gets all moodle courses
     *
     * @return array
     */
    public function fetchAllCourses()
    {
        $url = config('services.moodle.url') . '/webservice/restful/server.php/core_course_get_courses';
        try {
            $client = new Client();
            $response = $client->request(
                'POST',
                $url,
                [
                    'headers' => $this->headers,
                    'form_params' => [
                        "options" => [
                            "ids" => []
                        ]
                    ]
                ]
            );

            return json_decode($response->getBody());
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage());
        }
    }

    /**
     * Create a new moodle user
     *
     * @param array $data
     *
     * @return array
     */
    public function registerMoodleUser($data)
    {
        $url = config('services.moodle.url') . '/webservice/restful/server.php/core_user_create_users';
        try {
            $client = new CurlClient();
            $response = $client->request(
                'POST',
                $url,
                [
                    'headers' => $this->getHeaders(),
                    'body' => $data
                ]
            );

            return json_decode($response->getResponse());
        } catch (\Exception $ex) {
            return redirect()->route('app.register')->withErrors("Unable to register, please try again.");
        }
    }

    public function assignMoodleCourse($data)
    {
        $url = config('services.moodle.url') . '/webservice/restful/server.php/enrol_manual_enrol_users';
        try {
            $client = new CurlClient();
            $response = $client->request(
                'POST',
                $url,
                [
                    'headers' => $this->getHeaders(),
                    'body' => $data
                ]
            );

            return json_decode($response->getResponse());
        } catch (\Exception $ex) {
            throw new \Exception($ex->getMessage());
        }
    }

    /**
     * Set the header
     *
     * @param array $headers
     * @return MoodleClient
     */
    public function setHeader($header = [])
    {
        if (count($header) > 0) {
            $this->headers[] = $header;
        }

        return $this;
    }

    /**
     * Get the headers
     *
     * @return array
     */
    public function getHeaders()
    {
        $headers = [];
        foreach ($this->headers as $key => $header) {
            $headers[] = $key . ': ' . $header;
        }

        return $headers;
    }
}
