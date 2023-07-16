<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StudentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->user();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nis' => ['required'],
            'nisn' => ['required', 'min:10', 'max:10'],
            'nama' => ['required'],
            'ttl' => ['required'],
            'kls' => ['required'],
            'status' => ['required']
        ];
    }
}
