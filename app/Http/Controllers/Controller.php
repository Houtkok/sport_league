<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use function Laravel\Prompts\password;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    //create for user
    public function Userregister(Request $request){
        $this->validate($request,[
            'username'  =>'required|string|unique:users',
            'email'     =>'required|string|email|unique:users',
            'password'  =>'required|min:8',
        ]);

        $user = User::create([
            'username'  =>$request->input('username'),
            'email'     =>$request->input('email'),
            'password'  =>Hash::make($request->input('password')),
            'role'      =>'User'
        ]);
        return ['user'=>$user];
    }
    public function Userlogin(Request $request){
        $this->validate($request,[
            'login'     =>'required',
            'password'  =>'required',
        ]);
        $temp   = $request->only('login','password');
        $field  = filter_var($request->input('login'),FILTER_VALIDATE_EMAIL)?'email':'username';
        if(auth()->attempt([$field=>$temp['login'],'password'=>$temp['password']])){
            $user=auth()->user();
            if ($user->role ==='user') {
                return ['user' => $user];
            } 
            else {
                auth()->logout();
                return ['error' => 'Invalid'];
            }
        }
        else{
            return ['error'=>'Invalid'];
        }
    }
    public function Userlogout(Request $request){
        $this->authorize('logout',auth()->user());
        auth()->logout();
        return ['message'=>'User have been log out'];
    }






    //Create for admin
    public function Adminregister(Request $request){
        $this->validate($request,[
            'username'  =>'required|string|unique:users',
            'email'     =>'required|string|email|unique:users',
            'password'  =>'required|min:8',
        ]);

        $user = User::create([
            'username'  =>$request->input('username'),
            'email'     =>$request->input('email'),
            'password'  =>Hash::make($request->input('password')),
            'role'      =>'Admin'
        ]);
        return ['user'=>$user];
    }
    public function Adminlogin(Request $request){
        $this->validate($request,[
            'login'     =>'required',
            'password'  =>'required',
        ]);
        $temp   = $request->only('login','password');
        $field  = filter_var($request->input('login'),FILTER_VALIDATE_EMAIL)?'email':'username';
        if(auth()->attempt([$field=>$temp['login'],'password'=>$temp['password']])){
            $user=auth()->user();
            if ($user->role ==='admin') {
                return ['user' => $user];
            } 
            else {
                auth()->logout();
                return ['error' => 'Invalid'];
            }
        }
        else{
            return ['error'=>'Invalid'];
        }
    }
    public function Adminlogout(Request $request){
        $this->authorize('logout',auth()->user());
        auth()->logout();
        return ['message'=>'User have been log out'];
    }
}
