<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Request;
use App\about;

class AboutController extends Controller
{
    public function __construct(){

    }

    public function lists(){
        return $data = about::orderBy('id','desc')->first();
    }

    public function update(Request $request){
        $data = $request::all();
        unset($data['created_at'],$data['updated_at']);
        about::where('id',$data['id'])->update($data);
    }
}