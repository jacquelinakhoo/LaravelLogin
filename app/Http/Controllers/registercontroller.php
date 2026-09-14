<?php

namespace App\Http\Controllers;

use App\Model\User;
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
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user = $request->input('username');
        $password = $request->input('password');

        $user = User::findByUsername($username);

        if($user && Hash ::check($password, $user->password)) {
           $request->session()->put('user_id', $user->id);
            $request->session()->put('u', $user->username);

            return redirect('/home');
        } else {
            return redirect('/login')->with('error', 'Invalid username or password');

    }
}
}
