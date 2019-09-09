<?php
namespace App\Http\Requests\Sysdef;

use App\Http\Requests\Request;

class FeedbackRequest extends Request
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
                    if(!access()->check()) {
                        return [
                            'name' => 'required',
                            'phone' => 'numeric|required',
                            'email' => 'email|nullable',
                            'message_check' => 'required',
                            'captcha' => 'required|captcha',
                        ];
                    } else {
                        return [
                            'message_check' => 'required',
                        ];
                    }
                }
            case 'PUT':
            case 'PATCH':
                {

                }
            default:break;
        }
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();
        $input['message_check'] = strip_tags(preg_replace('/\s+/', '', str_replace('&nbsp;',"", $input['message'])));
        $this->getInputSource()->replace($input);
        return parent::getValidatorInstance();
    }
}
