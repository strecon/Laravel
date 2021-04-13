<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

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
квинтэссенцию победы маркетинга над разумом и должны быть объективно рассмотрены соответствующими инстанциями.',
            'content' => ' '
        ],
        2 => [
            'category' => '2',
            'title' => 'Каждый из нас понимает очевидную вещь: реализация намеченных плановых заданий прекрасно подходит для реализации инновационных методов управления процессами.',
            'content' => ' '
        ],
        3 => [
            'category' => '3',
            'title' => 'Приятно, граждане, наблюдать, как сделанные на базе интернет-аналитики выводы,
инициированные исключительно синтетически, смешаны с не уникальными данными до степени
совершенной неузнаваемости, из-за чего возрастает их статус бесполезности.',
            'content' => ' '
        ],
        4 => [
            'category' => '1',
            'title' => 'А ещё акционеры крупнейших компаний объединены в целые кластеры себе подобных. Лишь
некоторые особенности внутренней политики объединены в целые кластеры себе подобных.',
            'content' => ' '
        ],
        5 => [
            'category' => '2',
            'title' => 'Приятно, граждане, наблюдать, как интерактивные прототипы формируют глобальную экономическую сеть и при этом -  представлены в исключительно положительном свете!',
            'content' => ' '
        ],
        6 => [
            'category' => '3',
            'title' => 'Повседневная практика показывает, что выбранный нами инновационный путь предопределяет высокую востребованность инновационных методов управления процессами.',
            'content' => ' '
        ]
    ];

    // вывод блоков с названиями категорий
    public function getNewsCategories():array {
        $boofer = [];
        foreach ($this->categories as $id => $category) {
            $boofer[$id] = $category;
        }
        return $boofer;

//        foreach ($boofer as $id => $category) {
//            $url = route('news::list', ['category' => $id]);
//            echo "<p><a href='$url'>$category</a></p>"; // 1
////            echo "<p>$category</p>"; // 2
    }

    // вывод новостей по выбранной категории
    public function getNewsList($category):array {

        $boofer = [];
        foreach ($this->news as $id => $item) {
            if($item['category'] == $category) {
                $boofer[$id] = $item['title'];
            }
        }
        return $boofer;

//        foreach ($boofer as $id => $item) {
//            $url = route('news::card', ['id' => $id]);
//            echo "<p><a href='$url'>$item</a></p>";
//        }
    }

// вывод выбранной новости
    public function getCard($id):string {

        $news = $this->news[$id];
        return $news['title'];
        // return $news['content'];
    }

}
