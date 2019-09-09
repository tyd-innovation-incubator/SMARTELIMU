<?php
namespace App\Http\Requests\Sysdef;

use App\Http\Requests\Request;

class DateRangeRequest extends Request
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
        $input = $this->all();
        $basic = [
//            'from_date' => 'date|date_format:Y-n-j|before_or_equal:this_date',
            'from_date' => 'date|date_format:Y-n-j',
            'to_date' => 'date|date_format:Y-n-j|after_or_equal:from_date',
        ];

        return $basic;

    }

    public function sanitize()
    {

        /*from & to date*/

        $input = $this->all();

        if (isset( $input['from_date'] )){

            $input['from_date'] =  standard_date_format($input['from_date']) ;

        }
        if (isset( $input['to_date'] )) {
            $input['to_date'] = standard_date_format($input['to_date']);
        }
        /*from & to date*/

        $this->replace($input);
        return $this->all();

    }

}