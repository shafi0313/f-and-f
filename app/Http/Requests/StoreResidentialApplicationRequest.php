<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreResidentialApplicationRequest extends FormRequest
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
            'first_name'       => ['required', 'string', 'min:1', 'max:191'],
            'last_name'        => ['required', 'string', 'min:1', 'max:191'],
            'phone'            => ['required', 'string', 'min:1', 'max:191'],
            'email'            => ['required', 'string', 'min:1', 'max:191'],
            'd_of_b'           => ['required', 'date'],
            'vehicle'          => ['required', 'string', 'min:1', 'max:10'],
            'job_title'        => ['required', 'string', 'min:1', 'max:191'],
            'company'          => ['nullable', 'string', 'min:1', 'max:191'],
            'department'       => ['nullable', 'string', 'min:1', 'max:191'],
            'monthly_income'   => ['nullable', 'string', 'min:1', 'max:191'],
            'annual_income'    => ['nullable', 'string', 'min:1', 'max:191'],
            'income_cer'       => ['required', 'image', 'mimes:jpeg,jpg,JPG,png,webp,svg'],
            'pets'             => ['required', 'string', 'min:1', 'max:10'],
            'current_address'  => ['required', 'string', 'min:1', 'max:191'],
            'current_address2' => ['required', 'string', 'min:1', 'max:191'],
            'city'             => ['nullable', 'string', 'min:1', 'max:191'],
            'state'            => ['nullable', 'string', 'min:1', 'max:191'],
            'post'             => ['nullable', 'string', 'min:1', 'max:191'],
            'job_duration'     => ['required', 'string', 'min:1', 'max:191'],
            'leaving'          => ['nullable', 'string', 'min:1'],
            'f_landlord_name'  => ['nullable', 'string', 'min:1', 'max:191'],
            'l_landlord_name'  => ['nullable', 'string', 'min:1', 'max:191'],
            'landlord_phone'   => ['nullable', 'string', 'min:1', 'max:191'],
            'evicted'          => ['required', 'string', 'min:1', 'max:10'],
            'crime'            => ['required', 'string', 'min:1', 'max:10'],
            'move_date'        => ['required', 'date'],
            'security_date'    => ['required', 'date'],
            'pay_method'       => ['required', 'string', 'min:1', 'max:191'],
            'signature1'       => ['nullable'],
            'signature1_date'  => ['required', 'date'],
            'signature2'       => ['nullable'],
            'signature2_date'  => ['nullable', 'date'],
            'signature3'       => ['nullable'],
            'signature3_date'  => ['nullable', 'date'],
        ];
    }
}
