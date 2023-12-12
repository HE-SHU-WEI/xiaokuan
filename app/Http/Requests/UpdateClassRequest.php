<?php


namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClassRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'classname' => 'required|string|max:255',
            'link' => 'required|url',
            'videotime' => 'required|string|max:255',
            'introduction' => 'required|string',
            'know' => 'required|string',
            'forwho' => 'required|string',
            'photo' => 'nullable|string|max:255',
            'money' => 'required|numeric',
            'classtype' => 'required|string|max:255',
        ];
    }
}
