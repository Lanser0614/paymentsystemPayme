<?php

namespace App\Http\Requests;

use App\Helpers\Regexr;
use Illuminate\Foundation\Http\FormRequest;

class PaymeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
        return [
            'transaction_id' => 'required|string',
            'amount' => 'required|numeric',
            'account' => 'required|numeric',
            'method' => 'required|string'
        ];
    }
}
