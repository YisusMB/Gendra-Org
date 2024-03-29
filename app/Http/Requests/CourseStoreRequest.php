<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CourseStoreRequest extends FormRequest
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
            'courseName' => 'required',
            'instructorName' => 'required',
            'courseAddress' => 'required',
            'excerpt' => 'required',
            'file' => 'required|mimes:jpg,jpeg,png',
            'description' => 'required',
            'start_date' => 'required',
            'finalization_date' => 'required',
        ];

        return $rules;
    }
}
