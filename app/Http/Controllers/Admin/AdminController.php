<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
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

    // show ..
    public function allNews(News $news) {
//        dump($news->all());
        return view('admin.showNews', ['news' => $news->get()]);
    }

    public function allCategories(Category $category) {
//        echo "<h3>Admin Panel</h3>
//            <p>show all categories</p>";
        return view('admin.showCategories', ['category' => $category->get()]);
    }

    //add ..
    public function addNews() {
        //
        return view('admin.addNews');
    }

    public function addCategory() {
        return view('admin.addCategory');
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

    // update ..
    public function update() {
        echo "<h3>Admin Panel</h3>
            <p>update news</p>";
        exit;
    }

    //save
    public function save() {
        // save data somewhere
        return redirect()->route('admin::add');
    }

    // delete ..
    public function delete() {
        echo "<h3>Admin Panel</h3>
            <p>delete news</p>";
        exit;
    }
}
