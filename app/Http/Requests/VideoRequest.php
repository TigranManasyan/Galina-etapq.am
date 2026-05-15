<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'title_hy' => 'required',
            'title_en' => 'required',
            'publish_date' => 'required|date',
            'embed' => 'required',
        ];
    }

    public function messages(): array {
        return [
            'title_hy.required' => 'Վերնագիրը հայերենով պարտադիր է',
            'title_en.required' => 'Վերնագիրը անգլերենով պարտադիր է',
            'publish_date.required' => 'Հրապարակման ամսաթիվը պարտադիր է',
            'publish_date.date' => 'Հրապարակման ամսաթիվը վեվեր չէ',
        ];
    }
}
