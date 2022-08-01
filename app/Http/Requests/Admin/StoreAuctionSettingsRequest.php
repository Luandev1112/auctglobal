<?php
namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuctionSettingsRequest extends FormRequest
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
            'allow_custom_increments' => 'required',
            'hours_until_auction_ends_count_down' => 'max:2147483647|required|numeric',
            'enable_featured_items' => 'required',
            'enable_auctions_auto_extension' => 'required',
            'extend_auction_by' => 'max:2147483647|required|numeric',
            'during_the_last' => 'max:2147483647|nullable|numeric',
            'activate_picture_gallery' => 'required',
            'max_number_of_pictures' => 'max:2147483647|required|numeric',
            'max_pictures_size' => 'max:2147483647|required|numeric',
            'thumbnails_size' => 'max:2147483647|required|numeric',
            'bidder_privacy' => 'required',
        ];
    }
}
