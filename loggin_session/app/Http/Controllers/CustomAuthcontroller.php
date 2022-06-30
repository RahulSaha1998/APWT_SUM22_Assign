<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;


class CustomAuthcontroller extends Controller
{
    
   
    function login(){
         return view('auth.login');   
    }
    function registration(){
        return view('auth.registration');
    }


    //for registration page validation
    function registerUser(Request $req){
        $this->validate($req,
        [
            'name'=> 'required|alpha|unique:users',
            'password'=>'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'email'=>'required|email|unique:users'
        ]);

        $user = new User();
        $user->name = $req->name;
        $user->password= $req->password;
        $user->email = $req->email;
        $res = $user->save(); //insert query will run
        if($res){
        return back()->with('success','You have registered successfully');
        }
        else{
            return back()->with('fail','Fuck you');  
        }
    }



    //for login page validation
    function loginUser(Request $req){
        $this->validate($req,
        [
            'password'=>'required|',
            'email'=>'required|email|'
        ]);
        $user = User::where('email','=',$req->email)->first();
        if($user){
            if($req->password == $user->password){
              $req->Session()->put('loginId', $user->id);
                return redirect('dashboard');
            }
            else{
                return back()->with('fail','The password not matches'); 
            }
        }
        else{
            return back()->with('fail','The email not matches'); 
        }
    
}


function dashboard(Request $req){
    return view('auth.dashboard');

}

function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('login');
    }
}

}
