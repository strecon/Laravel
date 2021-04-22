<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create() {
        echo "<h3>Admin Panel</h3>
            <p>create</p>";
        exit;
    }
    // show
    public function read() {
        echo "<h3>Admin Panel</h3>
            <p>read</p>";
        exit;
    }

    public function update() {
        echo "<h3>Admin Panel</h3>
            <p>update</p>";
        exit;
    }

    public function delete() {
        echo "<h3>Admin Panel</h3>
            <p>delete</p>";
        exit;
    }
}
