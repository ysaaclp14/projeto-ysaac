<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request) {

        return view('home');

        // if ($request->input('token') !== 'my-token') {
        //     return redirect('home');
        // }

        // else {
        //     return redirect('login');
        // }
    
    }
}
