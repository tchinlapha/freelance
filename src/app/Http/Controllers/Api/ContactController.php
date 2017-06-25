<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Request;
use App\contact;

class ContactController extends Controller
{
    public function __construct(){

    }

    public function lists(){
        return $data = contact::orderBy('id','desc')->get();
    }

    public function add(Request $request){
        $data = $request::all();
        $result = contact::insert($data);
        return ["result"=>$result];
    }

    public function delete($id){
        contact::where('id',$id)->delete();
    }
}