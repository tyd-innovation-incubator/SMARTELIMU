<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Models\Auth\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    public function __construct()
    {

    }


    public function index()
    {


        return view('profile.index');
    }

    public function packages()
    {
        return view('profile.packages');
    }

}
