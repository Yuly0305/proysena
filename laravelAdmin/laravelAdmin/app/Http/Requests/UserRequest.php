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
      if ($this->method('PUT')) {
        return [
            'fullname'=>'required|min:4',
            'email'   =>'required|email|unique:users,email,'.$this->id,
            'phone'   =>'required|numeric',
            'birthdate'   =>'required|date',
            'gender'   =>'required',
            'address'   =>'required',
            'photo'   =>'max:1000',

        ];

      }else {
        return [
            'fullname'=>'required|min:4',
            'email'   =>'required|email|unique:users',
            'phone'   =>'required|numeric',
            'birthdate'   =>'required|date',
            'gender'   =>'required',
            'address'   =>'required',
            'photo'   =>'required|image|max:1000',
            'password'   =>'required|confirmed',
        ];
      }

    }
    public function messages(){
      return[
        'fullname.required'=>'El campo Nombre Completo es obligatorio ',
        'fullname.min'=>'El campo Nombre Completo debe tener al menos :min caracteres',
        'email.required'=>'El campo Correo Electronico es obligatorio ',
        'email.email'=>'El campo Correo Electronico debe ser una direcion de Correo valida ',
        'email.unique'=>'El campo Correo Electronico ya esta en uso ',
        'phone.required'=>'El campo Telefono  es obligatorio ',
        'phone.numeric'=>'El campo Telefono  es debe ser un numero ',
        'birthdate.required'=>'El campo Fecha es obligatorio ',
        'gender.required'=>'El campo Genero es obligatorio ',
        'address.required'=>'El campo Direccion es obligatorio ',
        'photo.required'=> 'El campo Foto es obligatorio',
        'photo.max'=> 'El campo Foto deber supera el tamaño',
        'password.required'=>'El campo Contraseña es obligatorio ',
        'password_confirmation.confirmed'=>'El campo Confirmar contraseña es obligatorio ',

      ];
    }
}
