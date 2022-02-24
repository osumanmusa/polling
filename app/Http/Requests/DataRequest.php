<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DataRequest extends FormRequest
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
            'name' => 'required| max:255',
            'position' => 'required',
            'ps_code' => 'required',
            'gender' => 'required',
            'phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'email' => 'nullable|email',
            'voter_id' => 'required|regex:/^\d{10}$/',
            'g_image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            's_name' => 'required',
            's_position' => 'required',
            's_gender' => 'required',
            's_phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            's_email' => 'nullable|email',
            's_voter_id' => 'required|regex:/^\d{10}$/',
            'o_name' => 'required',
            'o_position' => 'required',
            'o_gender' => 'required',
            'o_phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'o_email' => 'nullable|email',
            'o_voter_id' => 'required|regex:/^\d{10}$/',
            'w_name' => 'required| max:255',
            'w_position' => 'required',
            'w_gender' => 'required',
            'w_phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'w_email' => 'nullable|email',
            'w_voter_id' => 'required|regex:/^\d{10}$/',
            'y_name' => 'required| max:255',
            'y_position' => 'required',
            'y_gender' => 'required',
            'y_phone' => 'required|regex:/^0[2,5]{1}[0-9]{8}$/',
            'y_email' => 'nullable|email',
            'y_voter_id' => 'required|regex:/^\d{10}$/',
            'image.0' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'image.1' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'image.2' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'image.3' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'image.4' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'dob' => 'required',
            's_dob' => 'required',
            'o_dob' => 'required',
            'w_dob' => 'required',
            'y_dob' => 'required'


        ];
    }
}
