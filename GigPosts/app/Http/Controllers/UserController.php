<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function newUser(Request $req){

        $validated = $req->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $data['name'] = $req->username;
        $data['email'] = $req->email;
        $data['password'] = $req->password;

        $user = new User;
        $res = $user->addUser($data);

        if($res){
            $req->session()->put('username',$data['name']);
            return redirect("admin");
        }


    }

    public function userLogin(Request $req){

        $validated = $req->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user2 = new User;

        $data['username'] = $req->username;
        $data['password'] = $req->password;

        $res = $user2->loginUser($data);

        if($res){
            $req->session()->put('username',$data['username']);
            $req->session()->put('userId',$res->id);
            return redirect("admin");
        }else{
             return redirect('login')->withError('Wrong Login Credentials');
        }

    }
}
