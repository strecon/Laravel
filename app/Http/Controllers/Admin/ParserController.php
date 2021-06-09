<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Orchestra\Parser\Xml\Facade as XmlParser;

class ParserController extends Controller
{
    public function index(Request $request) {
        $xml = XmlParser::load('https://news.yandex.ru/army.rss');
        $data = $xml->parse([
           'channel_title' => ['uses' => 'channel.title'],
           'channel_description' => ['uses' => 'channel.description'],
           'items' => ['uses' => 'channel.item[title,description,pubDate,link]']
        ]);
        dump($data);

        foreach ($data['items'] as $item) {
//            dump($item);
//            dd(date( "Y-m-d H:i:s", strtotime($item['pubDate'])));
            $news = new News();
            $news->category = 10;   // todo: search category ID from DB by channel_title name
            $news->title = $item['title'];
            $news->content = $item['description'];
//            $news->published = $item['pubDate'];
            $news->published = date( "Y-m-d H:i:s", strtotime($item['pubDate']));
            $news->save();
        }
        return redirect()->route('admin::showNews')->with('success', 'Yandex news is added!');
    }
}
