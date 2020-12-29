<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
        return [
            'jurusan_id' => 'required|integer|exists:jurusans,id',
            'nama_lengkap' => 'required|max:255',
            'ttl' => 'required|date',
            'jenis_kelamin' => 'required|string|in:Laki-Laki,Perempuan',
            'agama' => 'required|max:255',
            'alamat' => 'required|max:255',
            'gambar' => 'required|mimes:jpg,jpeg,png'
        ];
    }
}
