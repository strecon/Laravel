<?php

namespace App\Http\Controllers;

use App\Models\News;
//use Illuminate\Support\Facades\View;
//use Illuminate\Http\Request;

class NewsController extends Controller
{

    // вывод блоков с названиями категорий
    public function index() {
        $categories = (new News())->getNewsCategories();
//        dd($categories);
        return view('news.news', ['categories' => $categories]);
    }

    // вывод новостей по выбранной категории
    public function showList($category) {
        $list = (new News())->getNewsList($category);
//        dd($list);
//        dd($category);
        return view('news.newsByCategory', ['category' => $category,'list' => $list]);
    }

    // вывод выбранной новости
    public function showCard($id) {
        $news = (new News())->getCard($id);
//        dd($news );
        return view('news.newsCard', ['news' => $news]);
    }
}
