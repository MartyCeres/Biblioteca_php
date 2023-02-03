<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function post_Login(Request $request)
    {
        ;
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $request['email'], 'password' => $request['password']])) {
            return redirect()->route('home');
        }
        $error = 1;
        return redirect()->route('home')->withInput(array('error' => $error));
    }

    public function post_Logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('home');
    }

    public function postEditUser(Request $request)
    {
        $user = Auth::user();
        $user->name= $request['name'];
        $user->email= $request['email'];
        $user->roles();
     
        $user->update();
        return redirect()->back();
    }
}
