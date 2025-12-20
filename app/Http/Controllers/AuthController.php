<?php

namespace App\Http\Controllers;

use App\Models\RegistrationTicket;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request) {
        // dummy
    }

    public function register(Request $request) {
        $data = $request->validate([
            'username' => ['required', 'unique:users', 'min:3', 'max:24', 'regex:/^[a-zA-Z0-9_]+$/'],
            'password' => ['required', 'min:4'],
            'ticket' => [
                'required',
                function ($attribute, $value, $fail) {
                    $ticket = RegistrationTicket::where('ticker', $value)->first();
                    if (!$ticket) {
                        $fail('Your registration ticket is invalid.');
                    }
                }
            ],
        ]);

        // todo: thumbnail stuff
        //
        
        
    }
}
