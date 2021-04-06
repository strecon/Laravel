<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryItemController extends Controller
{
    // прописать подгрузку форичем выбранной новости (из массива новостей)
    // id, item

    // массив новостей
    private $news = [
        1 => [
            'title' => 'Действия представителей оппозиции представляют собой не что иное, как квинтэссенцию победы маркетинга над разумом и должны быть объективно рассмотрены соответствующими инстанциями.'
        ],
        2 => [
            'title' => 'news 3<br>А ещё акционеры крупнейших компаний объединены в целые кластеры себе подобных. Лишь
некоторые особенности внутренней политики объединены в целые кластеры себе подобных.'
        ]
    ];

    // подгрузка
    public function newsCategoryItem($id)
    {
        $news = $this->news[$id];

        echo $news['title'];

        exit;
    }
}
