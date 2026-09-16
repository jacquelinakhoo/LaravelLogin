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
        $username = $request->input('u');
        $password = $request->input('zano');

        $condition = array ('username' => $username, 
                            'password' => $password);

        $Kelvin=new Databases;

        $Carlin=$Kelvin->pull('user','$condition');
        print_r($condition);
        if ($Carlin);
            session(['u'=>$Carlin->username]);
            return redirect()->intended('/dashboard');

        else{
            return redirect()->intended('/');
        }


    }
public function dashboard(){
{
    echo "selamat datang ";
    echo session('u');
}
}
};
