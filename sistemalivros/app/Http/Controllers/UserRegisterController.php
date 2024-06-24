<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Models\User;


class UserRegisterController extends Controller
{
    public function store(Request $request) {
       
        Validator::make($request->all(), [
            'name' => ['required', 'string'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', Password::min(5)]
        ])->validate();

        User::create($request->only([
            'name',
            'email',
            'password'
        ]));
        

        return redirect('/home');
    }
}
