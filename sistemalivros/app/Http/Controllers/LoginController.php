<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function index() {
        return view('login');
    }

    public function store(Request $request) {
        
        
        $cred = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required','min:5'],
        ]);

        

        if(Auth::attempt($cred)){
            return redirect('/home');
        }
        else {
            return redirect('login')->withErrors(['error' => 'Email or password incorrect']);
        }

    }
    public function destroy(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
 
        return redirect('/');
    }
}
