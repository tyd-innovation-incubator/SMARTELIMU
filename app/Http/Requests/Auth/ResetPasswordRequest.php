<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 3/21/19
 * Time: 11:07 AM
 */

namespace App\Http\Requests\Auth;


use Illuminate\Http\Request;

class ResetPasswordRequest extends Request
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
        return [
            'email' => 'required|string|email|max:255'

        ];
    }
}