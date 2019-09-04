<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 7/18/19
 * Time: 2:36 PM
 */

namespace App\Http\Controllers\Information;


use App\Http\Controllers\Controller;
use App\Models\Information\About;

class AboutController extends Controller
{


    public function __construct()
    {

    }


    public function showAboutUs()
    {
        $about = About::get()->first();
        return view('information.about.index')
            ->with('about',$about);
    }
}