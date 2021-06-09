<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use function React\Promise\all;

use \App\Http\Requests\AdminSaveCategoryRequest;
use \App\Http\Requests\AdminSaveNewsRequest;

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
    public function allNews() {
//        dump($news->all());
        $news = News::orderBy('created_at', 'desc')->paginate(2);
//        return view('admin.showNews', ['news' => $news]);
        return view('admin.showNews', compact('news')); // v1
    }

    public function allCategories() {
//        $category = Category::all();
        $category = Category::orderBy('name')->paginate(2);
//        return view('admin.showCategories', ['category' => $category->get()]);
        return view('admin.showCategories', ['category' => $category]); // v2
    }

    //add ..
    public function addNews() {
        return view('admin.addNews');
    }

    public function addCategory() {
        return view('admin.addCategory');
    }

    public function saveNews(AdminSaveNewsRequest $request) {

//        dd(\App::currentLocale());
//        \App::setLocale('ru');

//        dump($request->method());
//        dump($request->input('content'));

//        $validation = $request->validate([
//            'category' => 'required|exists:categories,id|digits_between:1,10',
//            'title' => 'required|unique:news,title|min:3|max:150',
////            'img' => 'image|file',
//            'content' => 'required'
//        ]); // This rules as public function remove into News model

        $news = new News();
        $news->category = $request->input('category');
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->published = now();
        // add img src later
        $news->save();

        return redirect()->route('admin::showNews')->with('success', 'Yours news is added!');
    }

    public function saveCategory(AdminSaveCategoryRequest $request) {

//        dd(\App::currentLocale());

//        $validation = $request->validate([
//            'name' => 'required|unique:categories|alpha|max:15'
//        ]); // This rules as public function remove into Category model

        $category = new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('admin::showCategories')->with('success', 'Added a new category!');
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
