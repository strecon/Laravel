<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// для разных задач класс Request можно переопределять:
// Illuminate\Http\Request; = myRequestClass1;
// Illuminate\Http\Request; = myRequestClass2;

class AdminController extends Controller
{
    // admin ..
    public function admin() {
        return view('admin.admin');
//        echo "<h3>Admin Panel</h3>
//            <p>admin action</p>";
//        exit;
    }

    //save
    public function save() {
        // save data somewhere
        return redirect()->route('admin::add');
    }

    //add
    public function add() {
        return view('admin.add');
    }

    // add with examples 1.. --------------
//    public function add(Request $request) {

//        dump($_POST);
//        dump($request);
//        dd($request);
//        dd($request->all());
//        dd($request->input('category'));
//        dd($request->only('title'));
//        ($request->query('title'));
//        dd($request->except('title', 'category'));
//
//        if ($request->isMethod('post')) {
//            echo "User data was saved!";
//        } else {
//            echo "User data was not saved!";
//        }
//
//        return view('admin.add');
//
//        dd(response());
//        return response();
//        return response('<br>sekfoaeuoierj');
//        return response(view('admin.add'))
//            ->headers('location', route('admin::panel'));
//
//        return redirect()->route('admin::panel');
//    }
    // ----------------------------

    // add.. -- examle2 ------------------
//    public function add(Request $request) {
//        // when Route::match(['get', 'post'],..
//        if ($request->isMethod('post')) {
////            echo "User data was saved!";
//            return redirect()->route('admin::add');
//        } else {
////            echo "User data was not saved!";
//        }
//        return response(view('admin.add'));
//    }
        // ------------------------------


    // show ..
    public function show() {
        echo "<h3>Admin Panel</h3>
            <p>show news</p>";
        exit;
    }

    // update ..
    public function update() {
        echo "<h3>Admin Panel</h3>
            <p>update news</p>";
        exit;
    }

    // delete ..
    public function delete() {
        echo "<h3>Admin Panel</h3>
            <p>delete news</p>";
        exit;
    }
}
