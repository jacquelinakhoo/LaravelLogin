<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class logincontroller extends Controller
{
    public function index()
    {
        return view('login');
    }
    public function aksilogin(Request $Request)
    {
        $model=new home();
     $USERNAME  = $Request->input('u');
        $zelly= $Request->input('zano');
        $where = array(
            'username' => $USERNAME,
            'password' => $zelly
        );
        $zellyjacq=$model->jackianlina('users', $where);
        if($zellyjacq && $zellyjacq->username==$USERNAME && $zellyjacq->password==$zelly){
            return redirect('/home');
        }else{user()->flash('error', 'Invalid username or password');
            return redirect('/');
        }
    }
}
