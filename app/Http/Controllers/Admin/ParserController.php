<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\NewsParsingJob;
use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index(Request $request) {

        $sources = [
            'https://news.yandex.ru/army.rss',
            'https://news.yandex.ru/auto.rss',
            'https://news.yandex.ru/cosmos.rss',
            'https://news.yandex.ru/music.rss'
        ];

        foreach ($sources as $source) {
            NewsParsingJob::dispatch($source);
        }

        return redirect()->route('admin::showNews');

//--------- replaced to NewsParcer (App\Services) --start------
//        $xml = XmlParser::load('https://news.yandex.ru/army.rss');
//        $data = $xml->parse([
//           'channel_title' => ['uses' => 'channel.title'],
//           'channel_description' => ['uses' => 'channel.description'],
//           'items' => ['uses' => 'channel.item[title,description,pubDate,link]']
//        ]);
//--------- replaced to NewsParcer (App\Services) --start------

// ------------- replaced to NewsParcerJob (App\Jobs) ----start------
//        foreach ($data['items'] as $item) {
////            dump($item);
////            dd(date( "Y-m-d H:i:s", strtotime($item['pubDate'])));
//            $news = new News();
//            $news->category = 10;   // todo: search category ID from DB by channel_title name
//            $news->title = $item['title'];
//            $news->content = $item['description'];
////            $news->published = $item['pubDate'];
//            $news->published = date( "Y-m-d H:i:s", strtotime($item['pubDate']));
//            $news->save();
//        }
// ------------- replaced to NewsParcerJob (App\Jobs) ----end------

//        return redirect()->route('admin::showNews')->with('success', 'Yandex news is added!');
    }
}
