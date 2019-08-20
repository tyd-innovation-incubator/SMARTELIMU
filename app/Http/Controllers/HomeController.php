<?php

namespace App\Http\Controllers;

use App\Models\Information\Partner;
use App\Models\Information\Testimony;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $partners = Partner::all();
        dd($partners);
        $testimonies = Testimony::all();
        return view('home')
            ->with('partners',$partners)
            ->with('testimonies',$testimonies);
    }
}
