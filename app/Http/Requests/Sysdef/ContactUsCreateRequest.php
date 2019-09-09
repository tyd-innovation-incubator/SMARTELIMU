<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 1/17/19
 * Time: 11:06 AM
 */

namespace App\Http\Requests\Sysdef;


use App\Http\Requests\Request;

class ContactUsCreateRequest extends Request
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return[
//            'title' => 'required',
//            'email'=>'required',
//            'message' => 'required|max:150',

        ];
    }

}