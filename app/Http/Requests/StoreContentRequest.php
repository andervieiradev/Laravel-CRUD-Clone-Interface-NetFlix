<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
    public function rules(){

        //store
        if ($this->method() === "POST") {
            $validations = [
                'name' => 'required',
                'sinopse' => 'required',
                'year' => 'required|digits:4',
                'maturityRating' => 'required|in:L,10,12,14,16,18',
                'urlTrailer' => 'required',
                'logo' => 'required|file|max:512|image',
                'background' => 'required|file|max:512|image',
                'thumbVertical' => 'required|file|max:512|image',
                'thumbHorizontal' => 'required|file|max:512|image',
            ];
        }else{
            $validations = [
                'name' => 'required',
                'sinopse' => 'required',
                'year' => 'required|digits:4',
                'maturityRating' => 'required|in:L,10,12,14,16,18',
                'urlTrailer' => 'required',
                'logo' => 'sometimes|required|file|max:512|image',
                'background' => 'sometimes|required|file|max:512|image',
                'thumbVertical' => 'sometimes|required|file|max:512|image',
                'thumbHorizontal' => 'sometimes|required|file|max:512|image',
            ];
        }

        return $validations;

    }
}
