<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // admin ..
    public function admin() {
        return view('admin.admin');
//        echo "<h3>Admin Panel</h3>
//            <p>admin action</p>";
//        exit;
    }

    // add ..
    public function add() {
        return view('admin.add');
//        echo "<h3>Admin Panel</h3>
//            <p>add news</p>";
//        exit;
    }

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
