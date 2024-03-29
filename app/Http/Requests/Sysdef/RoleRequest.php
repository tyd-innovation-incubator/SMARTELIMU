<?php
namespace App\Http\Requests\Sysdef;

use App\Http\Requests\Request;
use App\Models\Sysdef\CodeValue;
use Illuminate\Validation\Rule;

class RoleRequest extends Request
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


        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
                {
                    return [];
                }
            case 'POST':
                {
                    return [
                        'name' => 'required|unique:roles',

                    ];
                }
            case 'PUT':
                {
                    $role_id = request()->input('role_id');
                    return [
                        'name' => [ 'required',
                            Rule::unique('roles')->where(function ($query) use($role_id)  {
                                $query->where('id','<>', $role_id);
                            })],

                    ];
                }
            case 'PATCH':
                {

                }
            default:break;
        }
    }
}
