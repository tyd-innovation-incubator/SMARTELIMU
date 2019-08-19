<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Repositories\Information\NewsRepository;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    protected $news;
    public function __construct()
    {
        $this->news = new NewsRepository();
    }

    public function search()
    {
        $all_news = $this->news->getAll();
        $latest_news = $this->news->getLatestNews(2);

        return view('information.news.search.search')
            ->with('all_news',$all_news)
            ->with('latest_news',$latest_news);
    }
}
