<?php

namespace App\Http\Controllers;

use App\Models\Information\Homeslide;
use App\Models\Information\Partner;
use App\Models\Information\Testimony;
use App\Models\Package\Package;
use App\Repositories\Information\NewsRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $news;
    public function __construct()
    {
        $this->middleware('auth');
        $this->news = new NewsRepository();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $partners = DB::table('partners')->paginate(4);
        $testimonies = DB::table('testimonies')->paginate(4);
        $homeslides = Homeslide::all();
        $packages = DB::table('package')->get();
        $news = $this->news->getAllForHomePage();

        return view('home')
            ->with('partners',$partners)
            ->with('homeslides',$homeslides)
            ->with('testimonies',$testimonies)
            ->with('news',$news)
            ->with('packages',$packages);
    }
}
