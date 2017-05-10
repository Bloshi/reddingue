<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
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
            't_nom' => 'required|alpha',
            't_prenom' => 'required|alpha',
            't_adresse_physique' => 'required',
            't_mail' => 'required|email',
            'i_numero' => 'required|max:12|numeric',
            'i_telephone' => 'max:12|numeric',
            't_objet' => 'required|min:50'
        ];
    }

    public function messages()
    {
        return [
            // 
        ];
    }
}
