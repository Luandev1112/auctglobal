<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreCitiesRequest extends FormRequest
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
            'city' => 'min:2|max:100|required|unique:cities,city,'.$this->route('city'),
            'country_address'=>'required',
            'country_latitude'=>'required',
            'country_longitude'=>'required',
            'state_address'=>'required',
            'state_latitude'=>'required',
            'state_longitude'=>'required',
        ];
    }
}
