<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCurrencySettingsRequest extends FormRequest
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
            'site_currency' => 'required',
            'money_format' => 'required',
            'decimal_digits' => 'max:2147483647|required|numeric',
            'symbol_position' => 'required',
        ];
    }
}
