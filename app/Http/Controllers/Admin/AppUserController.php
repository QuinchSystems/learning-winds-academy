<?php

namespace App\Http\Controllers\Admin;

use App\AppUser;
use App\Helpers\MoodleClient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AppUserController extends Controller
{
    public function moodleUsers() {
        $response = MoodleClient::create()->fetchAllUsers();

        $moodleUsers = $response->users;

        foreach ($moodleUsers as $user) {
            $appUser = AppUser::whereEmail($user->email)->first();

            if(!$appUser) {
                $appUser = new AppUser();
                $appUser->m_userid = $user->id;
                $appUser->first_name = $user->firstname;
                $appUser->last_name = $user->lastname;
                $appUser->username = $user->username;
                $appUser->password = bcrypt(Str::random(16));
                $appUser->email = $user->email;
                $appUser->save();
            } else {
                $appUser->m_userid = $user->id;
                $appUser->first_name = $user->firstname;
                $appUser->last_name = $user->lastname;
                $appUser->save();
            }
        }

        return AppUser::all();
    }

    public function users() {
        $users = AppUser::all();

        return view('admin.app-users.index', compact('users'));
    }
}
