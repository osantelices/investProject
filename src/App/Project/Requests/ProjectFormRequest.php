<?php

namespace App\Project\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectFormRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'name' => ['required']
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama Specialized cannot be empty',
        ];
    }



}
