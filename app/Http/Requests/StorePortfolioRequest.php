<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePortfolioRequest extends FormRequest
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
            'title' => 'required|max:255|min:3',
            'date' => 'required',
            'image' => 'required',
            'text' => 'required',

        ];
    }

    public function messages()
    {
        return[
            'title.required' => 'titolo obbligatorio',
            'title.max' => 'max caratteri :max',
            'title.min' => 'min caratteri :min',
            'date.required' => 'inserisci una data',
            'image.required' => 'inserisci un\'immagine',
            'text.required' => 'testo mancante',
        ];
    }
}
