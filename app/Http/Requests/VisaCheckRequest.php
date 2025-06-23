<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisaCheckRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'passport' => 'required|string|size:2|alpha',
            'destination' => 'required|string|size:2|alpha'
        ];
    }
}

