<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfficeValidationForm extends FormRequest
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
            "office_name" => "required",
            "head_office" => "required",
            "contact_person" => "required",
            "contact_number" => "required",
            "country" => "required",
            "email" => "required",
            "city" => "required",
            "state" => "required",
            "pincode" => "required",
            "address1" => "required",
            "address2" => "required",
        ];
    }
}
