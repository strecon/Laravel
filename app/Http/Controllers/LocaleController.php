<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LocaleController extends Controller
{
    public function changeLocale(Request $request, $locale) {

        \Session::put('locale', $locale);
//        dd(\Session::all());

        return redirect()->back();

        // ------ lesson 8 ---- start ----------
//        $request->session();    // или через реквест; получаем объект сессии
//        session();  // или через хэлпер; получаем объект или передаем ключ и получаем его значение

//        \Session::all();	// получить все значения
//        \Session::get('key');		// получить значение по ключу
//        \Session::put('key|[]');		// положить значение по ключу
//        \Session::exists('key');    // проверить на существование
//        \Session::remove('key');    // удалить значение по ключу
//        \Session::driver('a');  // указание способа хранения сессии
//        \Session::push('key');        // добавить значение в сессию
//        \Session::flush();            // чистка кэша сессии
//        \Session::flash();            // хранилище всплывающих сообщений сессии
//        $locale = \App::getLocale();  // получить текущую локаль
//        $locale = \App::setLocale();  // установить локаль
        // ------ lesson 8 ---- end ----------
    }

}
