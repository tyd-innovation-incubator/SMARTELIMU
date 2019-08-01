<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExtraPrimaryLevelController extends Controller
{
    //


    public function index()
    {
        return view('lessons.primary_level.index');
    }
}
