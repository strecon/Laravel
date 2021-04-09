<?php

namespace App\Http\Controllers;

use App\Models\News; //??
use Illuminate\Http\Request;

class NewsController extends Controller
{

    // вывод блоков с названиями категорий
    public function index() {
        return view('news.news');
        // return getNewsCategories();
    }

    // вывод новостей по выбранной категории
    public function showList($category) {
        return view('news.newsByCategory');
        // return getNewsList();
    }

    // вывод выбранной новости
    public function showCard($id) {
        return view('news.newsCard');
    }
}
