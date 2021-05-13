<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use App\Models\User;
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

    public function allUsers() {
        $users = User::orderBy('name', 'asc')->paginate(2);
        return view('admin.showUsers', compact('users'));
    }

    //add ..
    public function addNews($id = null) {
        return view('admin.addNews', ['id' => $id]);
    }

    public function addCategory($id = null) {
        return view('admin.addCategory', ['id' => $id]);
    }

    public function addUser($id = null) {
        return view('admin.addUser', ['id' => $id]);
    }

    public function saveNews($id = null, AdminSaveNewsRequest $request) {

//        $validation = $request->validate([
//            'category' => 'required|exists:categories,id|digits_between:1,10',
//            'title' => 'required|unique:news,title|min:3|max:150',
////            'img' => 'image|file',
//            'content' => 'required'
//        ]); // This rules as public function remove into News model

//        $news = new News();
        $news = $id ? News::find($id) : new News();
//        dump($news);
//        dd($id);

        $news->category = $request->input('category');
        $news->title = $request->input('title');
        $news->content = $request->input('content');
        $news->published = now();
        // add img src later
        $news->save();

        return redirect()->route('admin::showNews')->with('success', 'Success!!');
    }

    public function saveCategory($id = null, AdminSaveCategoryRequest $request) {

//        $validation = $request->validate([
//            'name' => 'required|unique:categories|alpha|max:15'
//        ]); // This rules as public function remove into Category model

//        $id = $request->post('id');
        $category = $id ? Category::find($id) : new Category();
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('admin::showCategories')->with('success', 'Success!!');
    }

    public function saveUser($id = null, AdminSaveNewsRequest $request) {
//        $user = new User();
        $user = $id ? User::find($id) : new User();

        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');  // !! md5
        $user->created_at = now();
        // add img src later
        $user->save();

        return redirect()->route('admin::showUsers')->with('success', 'Success!!');
    }

    // delete
    public function deleteNews($id) {
        News::find($id)->delete();
        // todo: add error handling
        return redirect()->back()->with('success', 'Deleted!');
    }
    public function deleteCategory($id){
        Category::find($id)->delete();
        // todo: add error handling
        return redirect()->back()->with('success', 'Deleted!');
    }
    public function deleteUser($id){
        User::find($id)->delete();
        // todo: add error handling
        return redirect()->back()->with('success', 'Deleted!');
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

}
