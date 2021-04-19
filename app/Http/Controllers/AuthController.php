<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    private $users = [
        'login' => '',
        'password' => ''
    ];

    public function auth() {
        return view('auth');
    }

    public function save(Request $request) {
        // save new user in $users
//        dump($request->input());
        $users['login'] = $request->input('login');
        $users['password'] = $request->input('password');
        dump($users);
        return view('auth');
    }
}
