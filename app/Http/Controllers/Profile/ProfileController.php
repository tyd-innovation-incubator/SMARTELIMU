<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\Auth\Candidate;
use App\Repositories\Access\UserRepository;
use App\Repositories\Package\InvoiceRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255|alpha_spaces',
            'last_name' => 'required|string|max:255|alpha_spaces',

            'username' => 'required|string|max:255|alpha_spaces',
            'phone' => ['required', 'string', 'phone:TZ', 'unique:users'],
            'email' => 'required|string|email|max:255|unique:users',
            'category_cv_id' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }


    public function index()
    {


        $user = access()->user();
        return redirect()->route('profile.personal_info');
//        return view('profile.index')
//            ->with('user',$user);
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
        return redirect()->route('profile.candidate_info');
    }


    public function personalInformation()
    {
        $user = access()->user();
        return view('profile.personal_info')
            ->with('user',$user);
    }

    public function editPersonalInformation($user)
    {
        $user = $this->users->getOneByUuid($user);
        return view('profile.includes.edit_personal_information')
            ->with('user',$user);
    }

    public function updatePersonalInformation(RegisterRequest $request,$user)
    {
        $user = $this->users->getOneByUuid($user);

        $this->validator($request->all());
        $user = $this->users->update($request->all(),$user);
        return view('profile.personal_info')
            ->with('user',$user);
    }


    public function candidateInformation()
    {
        $user = access()->user();
        return view('profile.candidate_info')
            ->with('user',$user);
    }

    public function editCandidate($candidate)
    {
        $user = access()->user();

        $candidate = $user->candidates()->where('uuid',$candidate)->get()->first();
        return view('profile.includes.candidate.edit')
            ->with('candidate',$candidate);
    }

    public function updateCandidate(Request $request,$candidate)
    {
        $input = $request->all();
        $user = access()->user();
        $candidate = $user->candidates()->where('uuid',$candidate)->get()->first();
        $candidate = $this->users->updateCandidate($input,$candidate);
        return redirect()->route('profile.candidate_info');
    }




}




