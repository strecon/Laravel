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
        $boofer = News::query()
            ->where('category', $category)
            ->get();
        return $boofer;

//        // --------------------------
//        $getNews = News::query()
//            ->where('category', $category)
//            ->get()->toArray();    // or ->all()->toArray()
////        dd($getNews);
//        $boofer = [];
//        foreach ($getNews as $id => $item) {
////            dump($item, $id);
//            if($item['category'] == $category) {
//                $id = $item['id'];
//                $boofer[$id] = $item['content'];
//            }
//        }
////        dd($boofer);
//        return $boofer;
//        // --------------------------
    }

    public function getCard($id) {
        $boofer = News::query()
            ->where('id', $id)
            ->get();
//        dd($boofer);
        return $boofer[0];

        // -----------------------

//        $news = News::query()
//            ->where('id', $id)
//            ->get()
//            ->toArray();
////        dump($news);
////        dd($news[0]['content']);
//         return $news[0]['content'];
//        // -----------------------
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
