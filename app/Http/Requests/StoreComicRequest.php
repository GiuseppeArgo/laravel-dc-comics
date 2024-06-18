<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => ['required', 'min:7'],
            'description' => ['min:10'],
            'price' => ['required', 'min:1'],
            'series' => ['required', 'min:1'],
            'sale_date' => ['required'],
        ];
    }

    /**
    * Get custom messages for validator errors.
    *
    * @return array
    */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo non può essere vuoto',
            'title.min' => 'Il titolo non può essere più corto di :min caratteri',
            'description.required' => 'La descrizione non pò essere vuota',
            'description.min' => 'La descrizione non può essere più corta di 10 caratteri',
            'price.required' => 'Scegli un prezzo',
            'price.min' => 'Il prezzo non può avere meno di 1 cifra',
            'series.required' => 'Indica la serie di appartenenza',
            'series.required' => 'Il nome della serie non può essere più corto di 1',
            'sale_date' => 'Seleziona una data'
        ];
    }
}
