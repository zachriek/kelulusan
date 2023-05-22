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
            'no_ujian' => ['required'],
            'nis' => ['required'],
            'nisn' => ['required'],
            'nama' => ['required'],
            'ttl' => ['required'],
            'ortu' => ['required'],
            'kls' => ['required'],
            'n_pai' => ['required'],
            'n_pkn' => ['required'],
            'n_bin' => ['required'],
            'n_mat' => ['required'],
            'n_ipa' => ['required'],
            'n_ips' => ['required'],
            'n_big' => ['required'],
            'n_sb' => ['required'],
            'n_pjok' => ['required'],
            'n_pkr' => ['required'],
            'n_bde' => ['required'],
            'n_mulok2' => ['required'],
            'rata2' => ['required'],
            'status' => ['required']
        ];
    }
}
