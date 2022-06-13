<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;


class CustomAuthcontroller extends Controller
{
    
    function dashboard(Request $req){
        return "welcome to dashboard!";
    //     $req = User::all();
    // return $req; 
    // return view('auth.list');
         
   }
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
        $c1 = $user->save(); //insert query will run
        
        return "Successfully Registered!";
    }


    //for login page validation
    function loginUser(Request $req){
        $this->validate($req,
        [
            'password'=>'required|string|min:8|regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/',
            'email'=>'required|email|'
        ]);
        $user = User::where('email','=',$req->email)->first();
        if($user){
            if($req->password == $user->password){
              
                return redirect('dashboard');
            }
            else{
                return "password not matches!";
            }
        }
        else{
            return "This is email id is not registered!";
        }
    
}

}
