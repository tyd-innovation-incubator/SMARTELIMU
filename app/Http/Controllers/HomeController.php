<?php

namespace App\Http\Controllers;

use App\Models\Information\Homeslide;
use App\Models\Information\Partner;
use App\Models\Information\Testimony;
use App\Models\Package\Package;
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
        $testimonies = Testimony::all();
        $homeslides = Homeslide::all();
        $packages = Package::query()->get();
        return view('home')
            ->with('partners',$partners)
            ->with('homeslides',$homeslides)
            ->with('testimonies',$testimonies)
            ->with('packages',$packages);
    }
}
