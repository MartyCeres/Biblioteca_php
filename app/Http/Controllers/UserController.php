<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function post_iscrizione(Request $request){
        $request->validate([
            'email' => 'required|email|unique:users',
            'name' => 'required|max:30',
            'password' => 'required|min:4',
        ]);
        $email = $request['email'];
        $name = $request['name'];
        $password = bcrypt($request['password']);
        $role_guest = $request['role']; //Role::where('name', 'guest')->first();
        
        $user = new User();
        $user->name= $name;
        $user->email= $email;
        $user->password= $password;
        $user->save();
        $user->users()->attach($role_guest);

        return redirect()->back();
    }

    public function post_Login(Request $request){;
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']])){
            return redirect()->route('home');
        }
        $error=1;
        return redirect()->route('home')->withInput(array('error'=> $error));
    }

    public function post_Logout(Request $request){
        Auth::logout();
        return redirect()->route('home');
    }

    public function post_AssegnoRuolo(Request $request){
        $user= User::where('email', $request['email'])->first();
        $user->users()->detach();

        if($request['role']=='role_admin'){
            $user->users()->attach(User::where('role', 'admin')->first());
        }
        
        if($request['role']=='role_guest'){
            $user->users()->attach(User::where('role', 'guest')->first());         
        }
        $done=1;
        return $done;
    }

    public function postDeleteUser(Request $request){
        $user= User::where('id', $request['id'])->first();
        $user->users()->detach();
        $user->delete();
        return redirect()->back();
    }

    public function postEditUser(Request $request){
        $user = Auth::users();
        $user->name= $request['name'];
        $user->email= $request['email'];
        if($request['password']!=null){
            if(Hash::check($request->get('password'), Auth::users()->password)){
                if(strcmp($request['password'], $request['newpass'])!=0){ 
                    if($request['newpass']==$request['cnewpass']){
                        $user->password= bcrypt($request['newpass']);
                    }else{
                        $error= "La nuova password non coincide con la conferma";
                        return redirect()->back();
                    }
                }else{
                    $error= "La nuova password coincide con quella attuale";
                    return redirect()->back();
                }
            }else{
                $error= "Password attuale errata";
                return redirect()->back();
            }
        }
        $user->update();
        return redirect()->back();
    }
}
