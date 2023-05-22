<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRegisterRequest extends FormRequest
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
        if ($this->id){
            return [
                'email'    => "required|unique:users,email,".$this->id,
                'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
                'name'     => 'required|max:255',
                'age'      => 'required|max:255',
                'phone'    => 'required|max:255',
                'password' => 'nullable|min:6',
            ];
        }
        else{
            return [
                'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif,webp',
                'name'     => 'required',
                'email'    => "required|email|unique:users",
                'name'     => 'required|max:255',
                'phone'    => 'required|max:255',
                'age'      => 'required|max:255',
                'password' => 'required|min:6',
                'gender'   => 'required|in:m,',
            ];
        }
    }

    public function messages()
    {
        return [
            'name.required' => 'Please enter admin name.',
            'email.required' => 'Please enter email address.',
            'email.unique' => 'Email address was used before',
            'password.required' => 'Please enter a password.',
            'password.min' => 'Your password must be at least :min characters long.',
        ];
    }
}
