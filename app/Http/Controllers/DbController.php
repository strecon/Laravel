<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class DbController extends Controller
{

    public function index() {
        //---- hw5 ------
//        $sql = "SELECT * FROM categories";
//        $categories = DB::select($sql);
//        dump($categories);

        $categoriesTable = DB::table('categories')
            ->get();
//        dump($categoriesTable);
        $categories = [];
        foreach ($categoriesTable aS $strings) {
//            dump($strings);
            foreach ($strings as $key => $string) {
                if ($key == 'name') {
                    dump($string);
                    $categories[] = $string;
                }
            }
        }
        dump($categories);

        return view('db', ['categories' => $categories]);


//        $boofer = [];
//        foreach ($this->categories as $id => $category) {
//            $boofer[$id] = $category;
//        }
//        dd($boofer);
        //---- hw5 ------


        //---- for example, lesson5 ------
        // сырые запросы
//        $scl = "
//            CREATE TABLE test (
//                id int PRIMARY KEY AUTO_INCREMENT,
//                content varchar(50)
//            )
//        ";
//        dd(DB::unprepared($scl));

//        $sql = "INSERT INTO test (content) VALUES (:content) ";
////        $result = DB::statement($sql, ['content' => 'test']);
//        $result = DB::insert($sql, ['content' => 'sdf433']);
//        dd($result);

    // --------------------
//        $sql = "SELECT * FROM test";
//        $result = DB::select($sql);
//        dump($result);
//        // или тоже через
//        // конструктор запросов
//        $result = DB::table('test')
//            ->get();
//        dump($result);
//
//        foreach ($result as $item) {
//            dump($item);
//        }
//        // коллецию - в массив объектов
//        dd($result->toArray());
        // ------------------------

//        $sql = "SELECT * FROM test WHERE id = :id";
//        $result = DB::select($sql, ['id' => 2]);
//        dump($result);
        //---- for example, lesson5 ------
    }
}
