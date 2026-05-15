<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'name_hy' => 'required|string',
            'name_en' => 'required|string',
            'doc' => 'required|mimetypes:application/pdf',
        ];
    }

    public function messages(): array {
        return [
            'name_hy.required' => 'Անվանումը հայերենով պարտադիր է',
            'name_hy.string' => 'Այս դաշտում կարող եք մուտքագրել միայն տեքստ',
            'name_en.required' => 'Անվանումը անգլերենով պարտադիր է',
            'name_en.string' => 'Այս դաշտում կարող եք մուտքագրել միայն տեքստ',
            'doc.required' => 'Ֆայլը պարտադիր պետք է լրացնել',
            'doc.mimetypes' => 'Ֆայլի ֆորմատը պետք է լինի pdf.'
        ];
    }
}
