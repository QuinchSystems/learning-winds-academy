<?php

namespace App\Http\Controllers\AppUser;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\AppUser;
use App\Helpers\MoodleClient;
use GuzzleHttp\Client;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::APP_PROFILE;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('app.auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:app_users'],
            'username' => ['required', 'string', 'max:255', 'unique:app_users'],
            'password' => [
                'required',
                'string',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*?\(\)])[A-Za-z\d!@#$%^&*?\(\)\(]{8,}$/u',
                'confirmed'
            ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        try {
            $moodleData = [
                "users" => [
                    [
                        'username' => $data['username'],
                        'password' => $data['password'],
                        'firstname' => $data['first_name'],
                        'lastname' => $data['last_name'],
                        'email' => $data['email'],
                        'lang' => 'en',
                    ]
                ]
            ];

            $users = MoodleClient::create()->registerMoodleUser($moodleData);

            return AppUser::create([
                'm_userid' => $users[0]->id,
                'first_name' => $data['first_name'],
                'last_name' => $data['last_name'],
                'username' => $data['username'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ]);
        } catch (\Throwable $th) {
            return redirect()->route('app.register')->withErrors("Unable to register, please try again.");
        }
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('app_users');
    }
}
