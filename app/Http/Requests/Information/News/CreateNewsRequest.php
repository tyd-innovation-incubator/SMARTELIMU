<?php
namespace App\Http\Requests\Information\News;

use App\Http\Requests\Request;

class CreateNewsRequest extends Request
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
        $input = request()->all();
        $service_type = [];
        $basic = [
            'title' => 'required|max:150',
            'content_check' => 'required',
            'content' => 'required',
            'islocal' => 'numeric|required',
        ];
        /*If news not general ; service type is required*/
        if (!array_key_exists('isgeneral', $input)){
            $service_type = [
                'service_type' => 'required',
            ];
        }
        return array_merge($basic, $service_type);
    }

    /*Handle empty entry on content box*/
    protected function getValidatorInstance()
    {
        $input = $this->all();
        $input['content_check'] = strip_tags(preg_replace('/\s+/', '', str_replace('&nbsp;',"", $input['content'])));
        $this->getInputSource()->replace($input);
        return parent::getValidatorInstance();
    }
}