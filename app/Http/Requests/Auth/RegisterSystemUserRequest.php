<?php

namespace App\Http\Requests\Auth;

use App\Http\Requests\Request;
use Propaganistas\LaravelPhone\PhoneNumber;

class RegisterSystemUserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $input = request()->input();
        $country = $input['country'];
        $region = [];
        $basic  = [];
        $optional = [];// Fields which exist
        $array = [];

        /*Region and province option*/
        if ($country == 'TZ') {
            $region = [
                'region' => 'required',
            ];
        }else{
            $region = [
                'province' => 'required',
            ];
        }
        $basic = [
            'name' => 'required|string|max:255',
            'othernames' => 'required|string|max:255',
            'country' => 'required',
            'phone' => 'required|unique:users|phone:' . $country ,
            'email' => 'required|string|email|max:255|unique:users',
            'user_account_cv_id' => 'required',
            'password' => 'required|string|min:6|confirmed',
        ];

        /*Validation when registering system user*/
        if (array_key_exists('unit', $input)){
            $array = [  'unit' => 'required'];
            $optional = array_merge($array, $optional);
        }elseif(array_key_exists('designation', $input)){
            $array = [   'designation' => 'required',];
            $optional = array_merge($array, $optional);
        }elseif(array_key_exists('roles', $input)){
            $array = [   'roles' => 'required',];
            $optional = array_merge($array, $optional);
        }




        return array_merge($region, $basic, $optional);
    }

    /**
     * @return array
     */
    public function sanitize()
    {

        /*start exceptions on trim*/
        /*roles*/
        $roles = [];
        if(array_key_exists('roles', request()->input())){
            $roles = [ 'roles' => request()->input('roles')];
        }
        /*user account*/
        $user_account_cv_id = [ 'user_account_cv_id' => request()->input('user_account_cv_id')];
        /*trim with exception*/
        $input = array_map('trim', $this->except('user_account_cv_id', 'roles'));
        /*merge with exception*/
        $input= array_merge($user_account_cv_id,$roles,$input);
        /*end exception*/
        $input['email'] = strtolower(trim($input['email']));
        /*Remove extra whitespace*/
        $input['name']  =  preg_replace('/\s+/', ' ', $input['name'] );
        $input['othernames']  =  preg_replace('/\s+/', ' ', $input['othernames'] );
//        $input['phone'] = PhoneNumber::make($input['phone'], $input['country'])->formatE164();
        $this->replace($input);
        return $this->all();

    }

}
