<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\Integer;

/**
 * App\Models\News
 *
 * @property int $id
 * @property string $title
 * @property string|null $content
 * @property int $category
 * @property string|null $img
 * @property string|null $source
 * @property int|null $views
 * @property string $published
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|News newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|News query()
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereImg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News wherePublished($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereSource($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|News whereViews($value)
 * @mixin \Eloquent
 */
class News extends Model
{
    use HasFactory;

    // вывод новостей по выбранной категории
    public function getNewsList($category) {

        $getNews = News::query()
            ->where('category', $category)
            ->get()->toArray();    // or ->all()->toArray()
//        dd($getNews);

        $boofer = [];
        foreach ($getNews as $id => $item) {
//            dump($item, $id);
            if($item['category'] == $category) {
                $id = $item['id'];
                $boofer[$id] = $item['content'];
            }
        }
//        dd($boofer);
        return $boofer;

    }



// ----- lesson6 -- start-----------------
    // принудительное направление на таблицу users (по-умолчанию - news)
//    protected $table = 'users';

    // принудительное переопределения поля primaryKey в passport (по-умолчанию - id)
//    protected $primaryKey = 'passport';

    // принудительное переопределения подключения к БД (по-умолчанию - из .env, где other_db - альас из /config/database.php)
//    protected $connection = 'other_db';

    // отмена автоматического заполнения полей ХХХ датами
//    public $timestamps = false;

    // перечень доверенных атрибутов (должны быть использованы или перечень не создается вовсе)
    // названия ключей соответствуют названиям столюцов из БД
    // используется для массового присвоения
//    protected $fillable = [
//        'title' => '',
//        'content' => '',
//        // ...
//    ];
    // Упрощает обращение к БД:
    // вместо
//    $news->title = $array['title'];
//    $news->content = $array['content'];
    // использую:
//    $news->$fill($array);
// тем самым подгружая в БД массив $array целиком (в один ход :)

    // $casts задает тип принимаемых данных. Облегчает задачи по преобразованию
    // Например, на сервере лежит джейсон, а здесь прописан массив - при получении джейсон преобразуется в массив
//    protected $casts = [
//        'email_verified_at' => 'datetime',
//    ];

    // Поля, которые при преобразовании в массис не пойдут
//    protected $hidden = [
//        'token',
//        'password',
//    ];
// ----- lesson6 -- end-----------------

}
