<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function addUser($data){
        $this->username = $data['name'];
        $this->email = $data['email'];
        $this->password = $data['password'];
        $result = $this->save();

       if($result){
        session()->put("userId",$this->id);
        return true;
       }else{
        return false;
       }

    }

    public function loginUser($data){
        return $this->where('username',$data['username'])->where('password','=',$data['password'])->first();
    }

    public function getUserGigs(){
        return $this->hasMany("App\Models\Gig");
    }
    
}
