<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nombres' => 'required|max:60',
            'apellidos' => 'required|max:60',
            'direccion' => 'required|max:60',
            'telefono' => 'required|numeric',
            'sexo' => 'required|max:60',
            'correo' => 'required|max:100',
        ];
    }
}
