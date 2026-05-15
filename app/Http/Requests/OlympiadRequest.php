<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OlympiadRequest extends FormRequest
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
            'url' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
    }

    public function messages(): array {
        return [
            'title_hy.required' => 'Վերնագիրը հայերենով պարտադիր է',
            'title_en.required' => 'Վերնագիրը անգլերենով պարտադիր է',
            'url.required' => 'Հղումը պարտադիր է',
            'cover.required' => 'Հիմնանկարը պարտադիր է',
            'cover.mimes' => 'Թույլատրելի ֆորմատներն են` jpeg,png,jpg,gif,svg',
            'cover.max' => 'Նկարի առավելագույն ծավալը 4048 բայթ է',
        ];
    }
}
