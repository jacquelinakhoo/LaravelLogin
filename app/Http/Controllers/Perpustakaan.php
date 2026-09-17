<?php

namespace App\Http\Controllers;

use App\Models\Databases;
use Illuminate\Http\Request;

class Perpustakaan extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request){
        $name = $request->input('u');
        $password = $request->input('zano');

        $condition = array ('name' => $name, 
                            'password' => $password);

        $Kelvin=new Databases;

        $Carlin=$Kelvin->pull('users',$condition);
        if ($Carlin){
            session(['u'=>$Carlin->name]);
            return redirect()->intended('/dashboard');
        }

        else{
            return redirect()->intended('/');
        }


    }
public function dashboard(){
{
   if (session('u')>0){
        return view('dashboard');
    }
    else{
        return redirect()->intended('/');
    }
}
}
    public function logout(){
        session()->flush();
        return redirect()->intended('/');
    }
};
