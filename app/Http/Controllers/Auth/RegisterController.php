<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\Access\UserRepository;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';
    protected $users;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(UserRepository $users)
    {
        $this->middleware('guest');
        $this->users = $users;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'first_name' => 'required|string|max:255|alpha_spaces',
            'last_name' => 'required|string|max:255|alpha_spaces',

            'username' => 'required|string|max:255|alpha_spaces',
            'phone' => 'required|unique:users' ,
            'email' => 'required|string|email|max:255|unique:users',
            'category_cv_id' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    public function register(Request $request)
    {

        $this->validator($request->all());
        $user = $this->users->create($request->all());
       return redirect()->route('auth.registered', $user->uuid)->withFlashSuccess(__('alert.registration.registered'));

//        $this->guard()->login($user);
//
//        return $this->registered($request, $user)
//            ?: redirect($this->redirectPath());

    }


    public function updateUser(Request $request,$user)
    {
        dd($user);
        $user = $this->users->update($request->all(),$user);
        return redirect()->back();

    }


    //register user from welcome page
    public function registerFromWelcomePage(Request $request)
    {
        $user = $this->users->saveUserFromWelcome($request->all());
        return redirect()->route('auth.registered', $user->uuid)->withFlashSuccess(__('alert.registration.registered'));

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return \App\User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }


    /**
     * Show the application registered form.
     *
     * @param User $user
     * @return $this
     */
    public function showRegisteredForm($user)
    {
        $user = $this->users->getOneByUuid($user);

        return view("auth/registered")
            ->with("user", $user);
    }

}
