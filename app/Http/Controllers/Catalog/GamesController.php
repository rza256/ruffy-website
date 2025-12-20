<?php

namespace App\Http\Controllers\Catalog;

use App\Enums\AssetType;
use App\Http\Controllers\Controller;
use App\Models\Asset;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function home(Request $request)
    {
        // games are technically assets
        // and games have places........................ ;_;
        // but its 2013M so it doesnt matter

        $games = Asset::where('asset_type', AssetType::Place)->orderBy('id', 'desc');
        
        return view('games.home', [
            'games' => $games,
        ]);
    }
}
