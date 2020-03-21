<?php

namespace Modules\Drivers\Http\Requests;

use Modules\Core\Http\Requests\AbstractFormRequest;

class FormRequest extends AbstractFormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'phone' => 'required|unique:drivers',
            'email' => 'required|email'
        ];
    }


}
