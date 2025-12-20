<?php

namespace App\Http\Controllers\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GamesController extends Controller
{
    public function home(Request $request)
    {
        // games are technically assets
        // and games have places........................ ;_;
        // but its 2013M so it doesnt matter
        
        return view('games.home');
    }
}
