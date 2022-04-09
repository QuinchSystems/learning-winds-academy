<?php

namespace App\Helpers;

class CurlClient
{
    protected $url;
    protected $method;
    protected $headers;
    protected $body;
    protected $options;
    protected $response;

    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function setResponse($response)
    {
        $this->response = $response;
        return $this;
    }

    public function getResponse()
    {
        return $this->response;
    }

    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function request($method = "GET", $url = null, $config = [])
    {
        $this->setMethod($method);
        $this->setUrl($url);
        $this->setHeaders($config['headers']);
        $this->setBody($config['body']);
        $this->execute();
        return $this;
    }

    public function execute()
    {
        $curl = curl_init();
        $body = json_encode($this->getBody());

        curl_setopt_array($curl, [
            CURLOPT_URL => $this->url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $this->method,
            CURLOPT_POSTFIELDS => $body,
            CURLOPT_HTTPHEADER => $this->headers,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            throw new Exception("cURL Error #:" . $err);
        } else {
            $this->setResponse($response);
            return $this;
        }
    }
}
