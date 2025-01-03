<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'email' => ['required', 'email','exists:users,email'],
            'password' => ['required', 'min:8']
        ];
    }

    //customize err
    public function messages()
    {
        return[
            'email.required'=>'Please, enter your email',
            'email.exists'=>'Email or Password is incorrect',
            'password.required'=>'PLease, enter your password',
            'password.min'=> 'Email or Password is incorrect'
        ];
    }
}
