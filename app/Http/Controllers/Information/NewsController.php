<?php

namespace App\Http\Controllers\Information;

use App\Http\Controllers\Controller;
use App\Models\Information\News;
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

    public function show($slug)
    {
        $news = $this->news->getOneBySlug($slug);
        return view('information.news.show.show')
            ->with('news',$news);

    }

    public function searchResult(Request $request)
    {
        $keyword = $request->input('keyword');
        $news = News::where('title', 'LIKE','%'.$keyword.'%')->paginate(9);
        dd($news);

    }
}
