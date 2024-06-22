<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(Request $request) {

        if (Auth::check()) {
            $user = Auth::user();
            $userName = $user->name;
            return view('home', ['userName' => $userName]);
        }
        else {
            return redirect()->route('login');
        }
            
    }
}
