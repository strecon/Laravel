<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialController extends Controller
{
    // редирект браузера на страницу авторизации FB
    public function loginFb() {
        if (\Auth::id()) {
           return redirect()->back();
        }
        return Socialite::with('facebook')->redirect();
    }

    // прием ответа со стороны социальной сети FB
    public function responseFb() {
        echo "Ku!";
        exit;
    }
}
