<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store(){

        $attributes = request()->validate([
            'name' => ['required', 'max:255'],
            'username' => ['required', 'unique:users,username', 'min:3', 'max:255'],
            'email' => ['required', 'unique:users,email', 'email', 'max:255'],
            'password' => ['required', 'min:7', 'max:255']
        ]);

        $user = User::create($attributes);

//        session()->flash('success', 'Your account has been created.');

        auth()->login($user);

        return redirect('/')->with('success', 'Your account has been created.');
    }
}
