<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreThuTucRequest extends FormRequest
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
            'mathutuc' => 'required',
            'tenthutuc' => 'required',
            'id_linhvuc' => 'required|numeric',
            'cap_thuc_hien_id' => 'required|numeric',
            'mota' => 'nullable',
            'trinh_tu' => 'nullable',
        ];
    }
}
