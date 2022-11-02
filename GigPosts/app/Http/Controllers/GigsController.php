<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Gig;
use App\Models\User;

class GigsController extends Controller
{
    public function addGig(Request $req){
        $req->validate([
            "title" => "required",
            "company" => "required",
            "location" => "required",
            "description" => "required",
            "type" => "required",
            "level" => "required"
        ]);

        $data["title"] = $req->title;
        $data["company"] = $req->company;
        $data["location"] = $req->location;
        $data["description"] = $req->description;
        $data["type"] = $req->type;
        $data["level"] = $req->level;
        $data["price"] = $req->price;
        $data["date"] = date("y-m-d H:i:s");

        $gig = new Gig;

       $res = $gig->create($data);

       if($res){
        return redirect("admin");
       }
       else{
        echo "There was a problem inserting";
       }
    }

    public function editGig(Request $req,$id){

        $req->validate([
            "title" => "required",
            "company" => "required",
            "location" => "required",
            "description" => "required",
            "type" => "required",
            "level" => "required"
        ]);

        $data["title"] = $req->title;
        $data["company"] = $req->company;
        $data["location"] = $req->location;
        $data["description"] = $req->description;
        $data["type"] = $req->type;
        $data["level"] = $req->level;
        $data["price"] = $req->price;

        $gig = new Gig;
        $res = $gig->edit($data,$id);

        if($res){
            return redirect('admin');
        }else{
            return "Something went wrong";
        }
    }

    public function searchGigs(Request $request){
        if(!empty($request->type) || empty(!$request->level)){
            if(!empty($request->type)){
                $data['type'] = $request->type;
            }
            if(empty(!$request->level)){
                $data['level'] = $request->level;
            }
        }else{
            return redirect()->route('/','No filter selected');
        }

        $gig = new Gig;
        $result = $gig->filterGigs($data);

        if($result){
            return view::make('index',['gigs' => $result,'message' => null]);
        }else{
            echo "No data found";
        }

    }
}
