<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
            'body_hy' => 'required',
            'body_en' => 'required',
            'slug' => 'required',
            'published_at' => 'required',
            'more_url' => 'required',
            'cover_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',
        ];
    }

    public function messages(): array {
        return [
            'title_hy.required' => 'Վերնագիրը հայերենով պարտադիր է',
            'title_en.required' => 'Վերնագիրը անգլերենով պարտադիր է',
            'body_hy.required' => 'Տեքստը հայերենով պարտադիր է',
            'body_en.required' => 'Տեքստը անգլերենով պարտադիր է',
            'slug.required' => 'slug-ը պարտադիր է',
            'published_at.required' => 'Հրապարակման ամսաթիվը պարտադիր է',
            'more_url.required' => 'Հղումը պարտադիր է',
            'cover_photo.required' => 'Հիմնանկարը պարտադիր է',
            'cover_photo.mimes' => 'Թույլատրելի ֆորմատներն են` jpeg,png,jpg,gif,svg',
            'cover_photo.max' => 'Նկարի առավելագույն ծավալը 4048 բայթ է',
        ];
    }
}
