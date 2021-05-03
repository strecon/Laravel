<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSaveNewsRequest extends FormRequest
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
            'category' => 'required|exists:categories,id|digits_between:1,10',
            'title' => 'required|unique:news,title|min:3|max:150',
//            'img' => 'image|file',
            'content' => 'required'
        ];
    }

    public function attributes()
    {
//        return parent::attributes(); // TODO: Change the autogenerated stub
        return ['category' => 'category ID'];
    }

    // for en locale only
//    public function messages()
//    {
////        return parent::messages(); // TODO: Change the autogenerated stub
//        return [
//            'category.required' => 'The category ID is required.',
//            'title.required' => 'The news title is required.',
//            'content.required' => 'The news content is required.'
//            // ..
//        ];
//    }
}
