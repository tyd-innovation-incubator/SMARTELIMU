<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Repositories\Access\UserRepository;
use App\Repositories\Package\InvoiceRepository;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //

    protected $users;
    protected $invoices;
    public function __construct()
    {

        $this->users = new UserRepository();
        $this->invoices = new InvoiceRepository();
    }


    public function index()
    {

        $user = access()->user();
        return view('profile.index')
            ->with('user',$user);
    }

    public function packages()
    {
        $user = access()->user();
        $paid_invoices = $this->invoices->getPaidInvoicesByUserId($user->id);
        return view('profile.packages')
            ->with('paid_invoices',$paid_invoices);
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
