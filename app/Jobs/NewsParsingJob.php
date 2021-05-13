<?php

namespace App\Jobs;

use App\Models\News;
use App\Services\NewsParser;
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
     * @param $source
     */
    public function __construct($source)
    {
        $this->source = $source;
    }

    /**
     * Execute the job.
     *
     * @param NewsParser $parser
     * @return void
     */
    public function handle(NewsParser $parser)
    {

        $data = $parser->run($this->source);
        sleep(3);
        dump($data);

        // saving to DB
        foreach ($data['items'] as $item) {
//            dump($item);
            $news = new News();
            $news->category = 10;   // todo: search category ID from DB by channel_title name
            $news->title = $item['title'];
            $news->content = $item['description'];
            $news->published = date("Y-m-d H:i:s", strtotime($item['pubDate']));
            $news->save();
        }

//        // ------------- whit logFile ---start -----
//        // todo: replace to method
//        \Storage::disk('parser_logs')
//            ->append('parsing.log', date('Y-m-d ') . $this->source);
//
//        $messages = 'success';
//
//        try {
//            $data = $parser->run($this->source);
//        } catch (\Exception $e) {
//            $messages = 'error';
//        } finally {
//            \Storage::disk('parser_logs')
//                ->append('parsing.log', $messages);
//        }
//        // ------------- whit logFile ---end -----

    }
}
