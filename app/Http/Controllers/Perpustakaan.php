<?php

namespace App\Http\Controllers;

use App\Models\Databases;
use Illuminate\Http\Request;

class Perpustakaan extends Controller
{
    //FOR LOGIN
    public function index()  //the most default, i alrd understand
    {
        return view('login');
    }

    public function login(Request $request){  //request function? $request can be anything
        $name = $request->input('u');  //$name and $password can be anything we want right? or does it has to match users table? but yeah so this line is saying $name takes from the view input of 'u'?
        $password = $request->input('zano');  //same as above

        $condition = array ('name' => $name,    //oh i think this is the one that has to match users table 'name' and 'password' has to match and its telling the system that $name also counts as/is the same as the name column in users table
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

    //FOR DASHBOARD
public function dashboard(){
{
   if (session('u')>0){
        $Kelvin= New Databases;
        $Septi['Sepno']=$Kelvin->tampil('users');
         return view('dashboard', $Septi);
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

    //FOR SIGNUP

public function register(){
        return view('register');
    }

public function form(Request $request){
    $request->validate([
        'u'=>'required',
        'e'=>'required',
        'p'=>'required'
    ]);

}
};
