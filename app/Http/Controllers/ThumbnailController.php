<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ThumbnailController extends Controller
{
    public function avatar(Request $request)
    {
        // I assume that in Roblox's backend they
        // do not create an Asset type of Image
        // when a new render is created
        
        if (!$request->query('userId'))
        {
            return abort(400);
        }
        
        $user = User::where('id', $request->query('userId'));
        
    }

    public function asset(Request $request)
    {
        // dummy file
        // deal with AssetVersion later
    }
}
