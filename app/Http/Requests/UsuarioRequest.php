<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
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
            'Nombres' => 'alpha_num|max:50|required',
            'email' => 'email|max:50|required|unique:usuario',
            'password' => 'required|alpha_num|max:35|confirmed',
        ];
    }
}
