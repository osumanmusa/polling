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
            'phone' => 'required',
            'email' => '',
            'voter_id' => 'required',
            'image' => 'required',
            's_name' => 'required',
            's_position' => 'required',
            's_gender' => 'required',
            's_phone' => 'required',
            's_email' => '',
            's_voter_id' => 'required',
            's_image' => 'required',
            'o_name' => 'required',
            'o_position' => 'required',
            'o_gender' => 'required',
            'o_phone' => 'required',
            'o_email' => '',
            'o_voter_id' => 'required',
            'o_image' => 'required',
            'w_name' => 'required| max:255',
            'w_position' => 'required',
            'w_gender' => 'required',
            'w_phone' => 'required',
            'w_email' => '',
            'w_voter_id' => 'required',
            'w_image' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'y_name' => 'required| max:255',
            'y_position' => 'required',
            'y_gender' => 'required',
            'y_phone' => 'required',
            'y_email' => '',
            'y_voter_id' => 'required',
            'y_image' => 'required',


        ];
    }
}
