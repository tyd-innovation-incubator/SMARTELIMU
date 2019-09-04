<?php

namespace App\Http\Controllers\Lessons;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PrimaryLevelController extends Controller
{
    //

    public function __construct()
    {

    }

    public function index()
    {
        return view('lessons.primary_level.index');
    }

    public function view($reference)
    {
        $package = code_value()->getCodeValueByReference($reference);

        return view('lessons.primary_level.show.show')
            ->with('package',$package);
    }
}
