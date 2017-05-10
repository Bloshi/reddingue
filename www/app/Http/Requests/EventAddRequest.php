<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventAddRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $rules = [
            't_titre_evenement' => 'required',
            't_lieu' => 'required',
            't_description' => 'required|min:100',
            't_url_image' => 'image|mimes:jpeg,bmp,png|size:2000'
        ];
        $photos = count($this->input('t_url_image'));
        foreach(range(0, $photos) as $index) {
            $rules['t_url_image.' . $index] = 'image|mimes:jpeg,bmp,png|max:2000';
        }

        return $rules;
    }
}
