<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image_album;
use App\image;
use App\about;
use App\certificate;

class ViewController extends Controller
{

    public function __construct()
    {
        
    }
    public function home()
    {
        $image = image_album::orderBy('id','desc')->limit(6)->get();
        return view('pages.home',["page"=>"home","image"=>$image]);
    }
    public function service()
    {
        $data = about::orderBy('id','desc')->first();
        $certificate = certificate::get();
        return view('pages.service',["page"=>"service","data"=>$data,"certificate"=>$certificate]);
    }
    public function portfolio()
    {
        $data = image_album::orderBy('id','desc')->get();
        foreach ($data as $key => $val) {
            $data[$key]['count'] = image::where('image_album_id',$val['id'])->count();
        }
        return view('pages.portfolio',["page"=>"portfolio", "data"=>$data]);
    }
    public function portfolio_view($id = NULL)
    {
        if($id){
            $album = image_album::where('id',$id)->select('id','name')->first();
            $data = image::where('image_album_id',$id)->orderBy('id','desc')->get();
        }
        return view('pages.portfolio_view',["page"=>"portfolio","data"=>$data, "album"=>$album]);
    }
    public function contact()
    {
        return view('pages.contact',["page"=>"contact"]);
    }
}
