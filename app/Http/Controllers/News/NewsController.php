<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // прописать подгрузку форичем списка категорий (список - из массива категорий)

    // массив категорий
    private $category = [
        1 => [
            'title' => 'Интриги'
        ],
        2 => [
            'title' => 'Скандалы'
        ],
        3 => [
            'title' => 'Расследования'
        ]
    ];

    // вывод блоков с названиями
    public function news()
    {

        echo "This is List News Category";
        exit;
    }
}
