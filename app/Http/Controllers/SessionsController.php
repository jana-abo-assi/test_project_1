<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store()
    {
        if (Auth::attempt(request(['email', 'password'])) == false) {
            return back()->with('message', 'The email or password is incorrect, please try again');
        }

        return redirect()->to('/');
    }

    public function destroy()
    {
        Auth::logout();

        return redirect()->to('/login');
    }
}
