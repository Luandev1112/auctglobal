<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCreatesRequest extends FormRequest
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
            'title' => 'required',
            'category_id' => 'required',
            'sub_category_id' => 'required',
            'description' => 'required',
            'start_date' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'end_date' => 'required|date_format:'.config('app.date_format').' H:i:s',
            'minimum_bid' => 'required',
            'reserve_price' => 'required',
            'shipping_conditions' => 'required',
            'status' => 'required',
            'user_id' => 'required',
        ];
    }
}
