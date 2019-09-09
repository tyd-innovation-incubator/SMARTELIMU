<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\User;
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


    //create or add candidate informations
    public function createCandidate()
    {
        return view('profile.includes.candidate.create');
    }

}
