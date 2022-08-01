<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSocialLoginsRequest extends FormRequest
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
            'facebook_client_id' => 'required',
            'facebook_client_secret' => 'required',
            'facebook_redirect_url' => 'required',
            'facebook_login_enable' => 'required',
            'google_client_id' => 'required',
            'google_client_secret' => 'required',
            'google_redirect_url' => 'required',
        ];
    }
}
