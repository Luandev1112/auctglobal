<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreSiteSettingsRequest extends FormRequest
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
            'site_title' => 'required',
            'admin_email' => 'required|email',
            'your_copyright_message' => 'required',
            'delete_auctions_older_than' => 'max:2147483647|required|numeric',
            'results_shown_per_page' => 'max:2147483647|required|numeric',
            'users_confirmation_method' => 'required',
            'default_country' => 'required',
            'default_language' => 'required',
        ];
    }
}
