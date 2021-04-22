<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home() {
//        echo "<h3>I am Home!</h3>
//            <p>This from controller.</p>";
//        exit;
        return view('home');
    }
}
