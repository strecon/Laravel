<?php

namespace App\Http\Controllers;

use App\Models\News_old;
use App\Models\News;
use App\Models\Category;

//use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class NewsController extends Controller
{

    // вывод блоков с названиями категорий
    public function index() {

        $categories = (new Category())->getNewsCategories();
//        dump($categories);
//        dd($categories);

        return view('news.news', ['categories' => $categories]);
    }

    // вывод новостей по выбранной категории
    public function showList($category) {
        $list = (new News())->getNewsList($category);
//        dump($list);
//        dd($category);
//        $categoryName = (new Category())->getCategoryName($category);
        return view('news.newsByCategory', ['category' => $category,'list' => $list]);
    }

    // вывод выбранной новости
    public function showCard($id) {
        $news = (new News())->getCard($id);
//        dd($news );
        return view('news.newsCard', ['news' => $news]);
    }
}
