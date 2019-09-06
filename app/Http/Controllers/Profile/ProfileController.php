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

        $user = access()->user();
        return view('profile.index')
            ->with('user',$user);
    }

    public function packages()
    {
        return view('profile.packages');
    }

}
