<?php

namespace App\Http\Controllers;

use App\Models\RegistrationTicket;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request) {
        $data = $request->validate([
            'username' => ['required', 'min:3', 'max:24'],
            'password' => ['required', 'min:4'],
        ]);

        if (Auth::attempt(['username' => $data['username'], 'password' => $data['password']], true)) {
            return redirect(route('ruffy.home'))->withSuccess('Successfully logged in!');
        }

        return redirect(route('ruffy.welcome'))->withSuccess('We could not log you in! Passwords are cAsE SeNsiTiVe!');
    }

    public function register(Request $request) {
        $data = $request->validate([
            'username' => ['required', 'unique:users', 'min:3', 'max:24', 'regex:/^[a-zA-Z0-9_]+$/'],
            'password' => ['required', 'min:4'],
            'ticket' => [
                'required',
                function ($attribute, $value, $fail) {
                    $ticket = RegistrationTicket::where('ticket', $value)->whereNull('used_by')->first();
                    if (!$ticket) {
                        $fail('Your registration ticket is invalid.');
                    }
                }
            ],
        ]);

        
        $ticket = RegistrationTicket::where('ticket', $data['ticket'])->whereNull('used_by')->first();

        // todo: thumbnail stuff
        //
        
        $user = User::create([
            'username' => $data['username'],
            'password' => $data['password'],
        ]);

        $ticket->update([
            'used_by' => $user->id,
        ]);
        
        return redirect()->back()->withSuccess('Successfully created an account. Log in!');
    }
}
