<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        if($this->method() == 'PUT'){
            //Form Update
            return [
                'fullname'  => 'required|min:4',
                'email'     => 'required|email|unique:users,email,'.$this->id,
                'phone'     => 'required|numeric',
                'birthdate' => 'required|date',
                'photo'     => 'required|image|max:1000'
            ];
        }else{
            //Form Create
            return [
                'fullname'   => 'required|min:4',
                'email'      => 'required|email|unique:users',
                'phone'      => 'required|numeric',
                'birthdate'  => 'required|date',
                'photo'      => 'required|image|max:1000',
                'password'   => 'required|confirmed'
            ];
        }
    }

    public function messages(){
        return [
            'fullname.required' => 'El campo nombre completo es requerido',
                'fullname.min'  => 'El campo nombre completo debe tener mínimo :min caracteres',

            'email.required' => 'El campo email es requerido',
                'email.email' => 'El campo correo electrónico debe ser de tipo email',
                    'email.unique' => 'El campo correo electrónico debe ser único',

            'phone.required' => 'El teléfono es requerido',
                'phone.numeric' => 'El campo teléfono es numérico',

            'birthdate.required' => 'La fecha de nacimiento es requerida',
                // 'birthdate.text' => 'La fecha de nacimiento debe ser de tipo fecha',
            
            'photo.required' => 'El campo foto es requerido',
                'photo.image' => 'El campo foto debe ser de tipo imagen',
                'photo.max' => 'El campo foto no puede superar 1 kilobyte',

            'password.required' => 'La contraseña es requerida',
        ];
    }
}
