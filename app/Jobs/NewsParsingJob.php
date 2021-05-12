<?php

namespace App\Jobs;

use App\Models\News;
use App\Services\NewsParcer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class NewsParsingJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $source;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle(NewsParcer $parcer)
    {
        $data = $parcer->run($this->source);
        sleep(3);
        dump($data);

        // saving to DB
//        foreach ($data['items'] as $item) {
////            dump($item);
//            $news = new News();
//            $news->category = 10;   // todo: search category ID from DB by channel_title name
//            $news->title = $item['title'];
//            $news->content = $item['description'];
//            $news->published = date("Y-m-d H:i:s", strtotime($item['pubDate']));
//            $news->save();
//        }

    }
}
