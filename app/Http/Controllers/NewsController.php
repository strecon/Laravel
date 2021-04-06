<?php

namespace App\Http\Controllers;

use App\Models\News; //??
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // массив категорий
    private $categories = [
        1 => 'Интриги',
        2 => 'Скандалы',
        3 => 'Расследования'
    ];

    // массив новостей
    private $news = [
        1 => [
            'category' => '1',
            'title' => 'Действия представителей оппозиции представляют собой не что иное, как
квинтэссенцию победы маркетинга над разумом и должны быть объективно рассмотрены соответствующими инстанциями.'
        ],
        2 => [
            'category' => '2',
            'title' => 'Каждый из нас понимает очевидную вещь: реализация намеченных плановых заданий прекрасно подходит для реализации инновационных методов управления процессами.'
        ],
        3 => [
            'category' => '3',
            'title' => 'Приятно, граждане, наблюдать, как сделанные на базе интернет-аналитики выводы,
инициированные исключительно синтетически, смешаны с не уникальными данными до степени
совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.'
        ],
        4 => [
            'category' => '1',
            'title' => 'А ещё акционеры крупнейших компаний объединены в целые кластеры себе подобных. Лишь
некоторые особенности внутренней политики объединены в целые кластеры себе подобных.'
        ],
        5 => [
            'category' => '2',
            'title' => 'Приятно, граждане, наблюдать, как интерактивные прототипы формируют глобальную экономическую сеть и при этом -  представлены в исключительно положительном свете!'
        ],
        6 => [
            'category' => '3',
            'title' => 'Повседневная практика показывает, что выбранный нами инновационный путь предопределяет высокую востребованность инновационных методов управления процессами.'
        ]
    ];



    // вывод блоков с названиями
    public function index() {

        $boofer = [];
        foreach ($this->categories as $id => $category) {
            $boofer[$id] = $category;

        }
//        return $boofer;
        foreach ($boofer as $category) {
            echo "<p>$category</p>";
        }

//        return view('news');

//        echo "<h2>News catalog</h2>";
//        exit;
    }


    // вывод новостей по выбранной категории
    public function showList($category) {

        $boofer = [];
        foreach ($this->news as $id => $item) {
            if($item['category'] == $category) {
                $boofer[$id] = $item['title'];
            }
        }
//      return $boofer;
        foreach ($boofer as $item) {
            echo "<p>$item</p>";
        }

//        echo "News list by category";
//        exit;

//        return view('newsByCategory');
    }


    // вывод выбранной новости ++
    public function showCard($id) {

        $news = $this->news[$id];
        return $news['title'];

//        echo "Selected news";
//        exit;

//        return view('newsCard');
    }
}
