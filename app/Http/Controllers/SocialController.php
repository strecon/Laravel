<?php

namespace App\Http\Controllers;

use App\Models\User;
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
//        echo "Ku!";
//        exit;
        $user = Socialite::driver('facebook')->user();
//        dump($user);
        //
        $laraUser = User::query()
            ->where('email', $user->getEmail())
            ->where('type_auth', 'fb')
            ->first();

        if (is_null($laraUser)) {
            // сохраняем в БД
            $laraUser = new User();
            $laraUser->fill([
    //            'token' => '',
                'name' => $user->getName(),
                'email' => $user->getEmail(),
                'password' => null,
                'id_in_soc' => $user->getId(),
                'type_auth' => 'fb',
                'avatar' => $user->getAvatar()
            ])->save();
        }

        // Авторизуем
        \Auth::login($laraUser);
        return redirect()->route('home');   // или в кабинет (пока его нет)
    }
}
