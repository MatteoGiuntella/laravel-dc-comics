<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
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
            'title'=>'required|max:1024',
            'description'=>'required|max:1024',
            'thumb'=>'required|max:1024|url',
            'price'=>'required|max:1024',
            'sale_date'=>'required|max:1024|date',
            'type'=>'required|max:64',
            'artists'=>'required|max:5000',
            'writers'=>'required|max:5000'
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'PER FAVORE INSERISCI IL TITOLO PER PROSEGUIRE',
            'title.max' => 'NUMERI CARATTERI MAX RAGGIUNTO',
        ];
    }
}
