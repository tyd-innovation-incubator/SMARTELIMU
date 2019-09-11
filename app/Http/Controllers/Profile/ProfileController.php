<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Repositories\Access\UserRepository;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    protected $users;
    public function __construct()
    {

        $this->users = new UserRepository();
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

    public function storeCandidate(Request $request)
    {

        $input = $request->all();
        $candidate = $this->users->createCandidate($input);

        return redirect()->back();
    }

}
