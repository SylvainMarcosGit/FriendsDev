<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestContact extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            //
            'name' => 'required|min:3',
            'email' => 'required|email|max:255',
           // 'subject' => 'required|min:6',
            'message' => 'required|min:10',
        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'L\'adresse email est obligatoire.',
            'email.email' => 'Veuillez entrer une adresse email valide.',
            'name.required'=>'Le nom du destinateur nom  est requis.',
            'name.min'=>'Le nom d\'utilisateur  doit avoir au moins :min catacteres.',
            'message.min'=>'Le message doit avoir au moins :min trois catacteres.',
            'message.required'=>'Le message est requis',

        ];
    }
}
