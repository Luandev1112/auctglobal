<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\Controller;

class SocialNetworksController extends Controller
{
    public function index()
    {
    	$data['title']              = getPhrase('site_settings');
        $data['active_class']       = 'settings';

        return view('admin.social_networks.index', $data);
    }
}
