<?php

namespace App\Classes;

use Illuminate\Support\Facades\DB;

class CoreFxns{

    public function __conctruct(){
        return "This is custom class";
    }

    // function to get a single value from the db
    // @params
    // $table=This is the name of the table to be used
    // $where=This is the where clause to be used in fetching the record.Should be passed in array form e.g
    // array("tablecolumnname"=>"value","tablecolumnname2"=>"value2");
    // $column=The name of the column name you wish to fetch.It is optional if you want the whole row
    public function getSingleValue($table = "users",$where,$column=null){
       if($column){
        return DB::table($table)->where($where)->pluck($column)->first();
       }else{
        return DB::table($table)->where($where)->first();
       }
    }

    public function getUserGigs($id){

    }

}

