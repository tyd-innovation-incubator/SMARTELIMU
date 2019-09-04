<?php

namespace App\Http\Controllers\Auth;


use App\Repositories\Access\UserRepository;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class ConfirmAccountController extends Controller
{

    protected $user;

    /**
     * ConfirmAccountController constructor.
     * @param UserRepository $user
     */
    public function __construct(UserRepository $user)
    {
        $this->middleware('guest')->except('logout');
        $this->user = $user;
    }

    /**
     * @param User $user
     * @return mixed
     */
    public function sendConfirmationEmail(User $user)
    {
        $new_token = mt_rand(100000,999999);
        $user->confirmation_code = $new_token;
        $user->save();
        $user->notify(new UserNeedsConfirmation());
        SendSms::dispatch($user, trans("strings.sms.registered").$user->confirmation_code);
        return redirect()->back()->withFlashSuccess(trans('alert.auth.confirmation_sent'));
    }

    /**
     * @param $token
     * @return mixed
     * @throws \App\Exceptions\GeneralException
     */
    public function confirm($token)
    {
        $this->user->confirmAccount($token);
        return redirect()->route('home')->withFlashSuccess(__('exceptions.auth.confirmation.success'));
    }



    public  function smsConfirm(Request $request,$user)
    {

        $user = $this->user->getOneByUuid($user);
        $code = $request->token;
        $token = $user->confirmation_code;
        if(strcmp($code,$token) == 0){
            $this->user->confirmAccount($token);
            return redirect()->route('home')->withFlashSuccess(__('exceptions.auth.confirmation.success'));
        }
        else{
            return redirect()->back()->withFlashDanger(trans('exceptions.auth.confirmation.mismatch'));
        }

    }

}
