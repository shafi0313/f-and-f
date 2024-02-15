<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCommercialApplicationRequest extends FormRequest
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
            'property_type'        => ['required', 'string', 'min:1', 'max:191'],
            'property_address'     => ['required', 'string', 'min:1', 'max:191'],
            'property_address2'    => ['nullable', 'string', 'min:1', 'max:191'],
            'property_city'        => ['nullable', 'string', 'min:1', 'max:191'],
            'property_state'       => ['nullable', 'string', 'min:1', 'max:191'],
            'property_post'        => ['nullable', 'string', 'min:1', 'max:191'],
            'property_description' => ['nullable', 'string', 'min:1', 'max:191'],
            'parking'              => ['required', 'string', 'min:1', 'max:191'],
            'lease_start_date'     => ['required', 'date'],
            'lease_end_date'       => ['required', 'date'],
            'rental_amount'        => ['required', 'numeric'],
            'payment_term'         => ['required', 'string', 'min:1', 'max:191'],
            'pay_method'           => ['required', 'string', 'min:1', 'max:191'],
            'security_amount'      => ['required', 'numeric'],
            'taxes'                => ['required', 'string', 'min:1', 'max:191'],
            'responsible'          => ['required', 'string', 'min:1', 'max:191'],
            'utilities'            => ['required', 'string', 'min:1', 'max:191'],
            'insurance'            => ['required', 'string', 'min:1', 'max:191'],
            'furniture'            => ['required', 'string', 'min:1', 'max:191'],
            'first_name'           => ['required', 'string', 'min:1', 'max:191'],
            'last_name'            => ['required', 'string', 'min:1', 'max:191'],
            'phone'                => ['required', 'string', 'min:1', 'max:191'],
            'email'                => ['required', 'string', 'min:1', 'max:191'],
            'address'              => ['required', 'string', 'min:1', 'max:191'],
            'address2'             => ['nullable', 'string', 'min:1', 'max:191'],
            'city'                 => ['nullable', 'string', 'min:1', 'max:191'],
            'state'                => ['nullable', 'string', 'min:1', 'max:191'],
            'post'                 => ['nullable', 'string', 'min:1', 'max:191'],
            'tenant_first_name'    => ['required', 'string', 'min:1', 'max:191'],
            'tenant_last_name'     => ['required', 'string', 'min:1', 'max:191'],
            'tenant_phone'         => ['required', 'string', 'min:1', 'max:191'],
            'tenant_email'         => ['required', 'string', 'min:1', 'max:191'],
            'tenant_address'       => ['required', 'string', 'min:1', 'max:191'],
            'tenant_address2'      => ['nullable', 'string', 'min:1', 'max:191'],
            'tenant_city'          => ['nullable', 'string', 'min:1', 'max:191'],
            'tenant_state'         => ['nullable', 'string', 'min:1', 'max:191'],
            'tenant_post'          => ['nullable', 'string', 'min:1', 'max:191'],
            'agreement_date'       => ['required', 'date'],
            'guarantee_lease'      => ['required', 'string', 'min:1', 'max:191'],
            'question'             => ['required', 'string', 'min:1', 'max:191'],
            'signature1'           => ['required'],
            'signature1_date'      => ['required', 'string', 'min:1', 'max:191'],
            'signature2'           => ['nullable'],
            'signature2_date'      => ['nullable', 'string', 'min:1', 'max:191'],
            'signature3'           => ['nullable'],
            'signature3_date'      => ['nullable', 'string', 'min:1', 'max:191']
        ];
    }
}
