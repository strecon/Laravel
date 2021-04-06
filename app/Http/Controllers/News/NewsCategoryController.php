<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsCategoryController extends Controller
{
    // прописать подгрузку форичем списка новостей по выбранной категории (список - из массива новостей)
    // id, category

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
    public function newsCategory()
    {
        foreach ($this->news as $id => $item) {
            $url = route('news::card', ['id' => $id]); // name must be change !!
            // cut off the end of the string and change it on ...
            echo "<div>
                    <a href='$url'>
                        {$item['title']}
                   </a>
                  </div>";
        }
        echo "This is Category News List";
        exit;
    }
}
