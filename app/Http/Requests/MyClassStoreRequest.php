<?php

namespace App\Http\Requests;

use Illuminate\Database\Query\Builder;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MyClassStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => [
                'required',
                'max:255',
                Rule::unique('class_groups')->where(fn ($query) => $query->where('school_id', $this->input('school_id') ?? auth()->user()->school_id)),
            ],
        ];
    }

    public function messages()
    {
        return [
            'class_group_id.required' => 'Please select a class group',
        ];
    }
}
