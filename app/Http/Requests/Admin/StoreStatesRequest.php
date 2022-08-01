<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreStatesRequest extends FormRequest
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
            'state' => 'min:2|max:100|required|unique:states,state,'.$this->route('state'),
            'country_address'=>'required',
            'country_latitude'=>'required',
            'country_longitude'=>'required',
        ];
    }
}
