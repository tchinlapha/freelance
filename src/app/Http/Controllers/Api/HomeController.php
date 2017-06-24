<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Request;
use App\config;

class HomeController extends Controller
{
    public function __construct(){

    }

    public function lists(){
        return $data = config::orderBy('id','desc')->first();
    }

    public function update(Request $request){
        $data = $request::all();
        unset($data['created_at'],$data['updated_at']);
        config::where('id',$data['id'])->update($data);
    }
}