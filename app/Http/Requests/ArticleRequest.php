<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ArticleRequest extends Request
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

        $rules = [
            'title'         => 'min:8|max:250|required|unique:articles',
            'category_id'   => 'required',
            'content'       => 'min:60|required',
            'image'         => 'required'
        ];

        $nbr = count($this->input('image')) - 1;
        foreach(range(0, $nbr) as $index) {
            $rules['image.' . $index] = 'image|max:4000';
        }

        return $rules;
    }
}
