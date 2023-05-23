<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return Auth::check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'start_date' => 'date',
            'end_date' => 'date',
            'address' => 'string|max:255',
            'city' => 'string|max:255',
            'zip' => 'string|max:255',
            'payment_method' => 'string|max:255',
            'payment_status' => 'required|string|max:255',
            'payment_url' => 'string|max:255',
            'total_price' => 'numeric',
            'item_id' => 'exists:items,id',
            'user_id' => 'exists:users,id',
        ];
    }
}
