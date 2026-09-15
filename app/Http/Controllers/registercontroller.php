<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function RegisterAction(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required',
        ]);
        User::create($validated);
        return redirect('/login');
    }

    public function login()
    {
        return view('login');
    }

    public function Aksilogin(Request $request)
    {
     
        echo $username = $request->input('u');
        echo $password = $request->input('zano');

        $user = User::findByUsername($username);
    

        if($password === $user->password ) {
           $request->session()->put('user_id', $user->id);
            $request->session()->put('u', $user->name);

            return redirect('/home');
        } else {
           return redirect('/')->with('error', 'Invalid username or password');

    }
}
}
