<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LibraryRequest extends FormRequest
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
            'department_hy' => 'required',
            'department_en' => 'required',
            'name' => 'required',
            'author' => 'required',
            'year' => 'required',
            'book' => 'required|mimetypes:application/pdf',
        ];
    }

    public function messages(): array {
        return [
            'department_hy.required' => 'Ամբիոնը հայերենով պարտադիր է',
            'department_en.required' => 'Ամբիոնը անգլերենով պարտադիր է',
            'name.required' => 'Անվանումը պարտադիր է',
            'author.required' => 'Հեղինակը պարտադիր է',
            'year.required' => 'Տարեթիվը պարտադիր է',
            'book.required' => 'Ֆայլը պարտադիր է',
            'book.mimetypes' => 'Կարող եք ընտրել միայն pdf ֆորմատով',
        ];
    }
}
