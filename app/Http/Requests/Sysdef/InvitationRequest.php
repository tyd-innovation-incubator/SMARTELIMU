<?php
/**
 * Created by PhpStorm.
 * User: dontito
 * Date: 1/14/19
 * Time: 4:21 PM
 */

namespace App\Http\Requests\Sysdef;


use App\Http\Requests\Request;

class InvitationRequest extends  Request
{

    public  function  authorize()
    {
     return true;

    }



    public  function rules()
    {
        $basic = [
            'document_file20' => 'mimetypes:application/excel,application/x-excel,application/x-msexcel,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,application/vnd.openxmlformats-officedocument.spreadsheetml.template,application/vnd.ms-excel.sheet.macroEnabled.12,application/vnd.ms-excel.template.macroEnabled.12,application/vnd.ms-excel.addin.macroEnabled.12,application/vnd.ms-excel.sheet.binary.macroEnabled.12,application/octet-stream',

        ];

        return $basic;


    }

    public function messages()
    {
        return [
            'mimetypes' => 'The :attribute must be of the type .xlsx extension'

        ];
    }
}