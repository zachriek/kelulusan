<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'sekolah' => ['required'],
            'kepsek' => ['required'],
            'kota' => ['required'],
            'ttd' => ['mimes:jpeg,png,jpg', 'max:10000'],
            'about' => ['required'],
            'tgl_pengumuman' => ['required'],
            'logo' => ['mimes:jpeg,png,jpg', 'max:10000'],
            'kop' => ['mimes:jpeg,png,jpg', 'max:10000'],
            'cap' => ['mimes:jpeg,png,jpg', 'max:10000'],
        ];
    }
}
