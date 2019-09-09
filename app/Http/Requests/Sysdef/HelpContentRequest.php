<?php
namespace App\Http\Requests\Sysdef;

use App\Http\Requests\Request;

class HelpContentRequest extends Request
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
                        'title' => 'required',
                        'content_check' => 'required',
                    ];
                }
            case 'PUT':
            case 'PATCH':
                {
                    return [
                        'title' => 'required',
                        'content_check' => 'required',
                    ];
                }
            default:break;
        }
    }

    protected function getValidatorInstance()
    {
        $input = $this->all();
        $input['content_check'] = strip_tags(preg_replace('/\s+/', '', str_replace('&nbsp;',"", $input['content'])));
        $this->getInputSource()->replace($input);
        return parent::getValidatorInstance();
    }
}
