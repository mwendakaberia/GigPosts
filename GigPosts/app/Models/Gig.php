<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    public $timestamps=false;

    public function create($data){
        $this->title = $data["title"];
        $this->location = $data["location"];
        $this->type = $data["type"];
        $this->level = $data["level"];
        $this->description = $data["description"];
        $this->company = $data["company"];
        $this->price = $data["price"];
        $this->date = $data["date"];
        $this->user_id = session("userId");

        $res = $this->save();

        if($res){
            return true;
        }else{
            return false;
        }
    }

    public function edit($data,$id){
        $gig = $this->find($id);
        $gig->title = $data["title"];
        $gig->location = $data["location"];
        $gig->type = $data["type"];
        $gig->level = $data["level"];
        $gig->description = $data["description"];
        $gig->company = $data["company"];
        $gig->price = $data["price"];

        $res = $gig->update();
        if($res){
            return true;
        }else{
            return false;
        }
    }

    public function filterGigs($data){
        if(empty(array_diff(['type','level'],array_keys($data)))){
            return $this->where('type',$data['type'])->orWhere('level',$data['level'])->get();
        }elseif (array_key_exists('type',$data)) {
            return $this->where('type',$data['type'])->get();
        }else{
            return $this->where('level',$data['level'])->get();
        }
    }
}
