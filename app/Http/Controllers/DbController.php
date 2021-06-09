<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class DbController extends Controller
{

    public function index() {
        //---- hw5 start ------
//        $sql = "SELECT * FROM categories";
//        $categories = DB::select($sql);
//        dump($categories);

        $categoriesTable = DB::table('categories')
            ->get();
//        dump($categoriesTable);

        $categories = [];
        foreach ($categoriesTable aS $row) {
            foreach ($row as $key => $item) {
                if ($key == 'name') {
                    $categories[] = $item;
                }
            }
        }

//        $newsTable = DB::table('news')
//            ->select(['title', 'content', 'category'])
//            ->get();
//        dump($newsTable);

//------ ?? to migration --start --
//        $sql = "SELECT `title`, `content`, `name` FROM news n, categories c WHERE c.id = n.category";
        $sql = "CREATE VIEW newsWithCategory
           AS SELECT `title`, `content`, `name`
           FROM news n, categories c
           WHERE c.id = n.category";
//        $newsWithCategory = DB::statement($sql);  // launched once and then commented out

//        dump($newsWithCategory);
//        dump(DB::statement($sql));
        // "DROP VIEW newsWithCategory"
//------ ?? to migration -- end--

        $newsWithCategory = DB::table('newsWithCategory')
            ->get()
            ->toArray();
//        dump($newsWithCategory);

        $list = [];

        foreach ($newsWithCategory as $items) {
            $boofer  = [];
            foreach ($items as $key => $item) {
                $boofer[$key] = $item;
            }
            $list[] = $boofer;
        }

        return view('db', ['categories' => $categories, 'list' => $list]);

//------------ hw5 end---------------------------



//---------- for example, lesson5 ---------------
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
//------------ for example, lesson5 ------------------

    }
}
