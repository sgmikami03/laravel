<?php

namespace App\Http\Controllers;

use App\User;
use App\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(string $name)
    {
        $user = User::where('name', $name)->first();

        return view('users.show', [
            'user' => $user,
        ]);

        print($user->followers);
        //print($user->isFollowedBy(Auth::user()));
    }
}
