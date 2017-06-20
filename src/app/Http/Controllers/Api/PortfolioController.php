<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\image_album;
use App\image;
use File;

class PortfolioController extends Controller
{
    public function __construct(){
        
    }

    public function portfolio(){
        $data = image_album::orderBy('id','desc')->get();
        foreach ($data as $key => $val) {
            $data[$key]['count'] = image::where('image_album_id',$val['id'])->count();
        }
        return view('admin.portfolio',["data"=>$data]);
    }

    public function portfolio_form($id = NULL){
        $data = [];
        $album = "";
        if($id){
            $album = image_album::where('id',$id)->select('id','name')->first();
            $data = image::where('image_album_id',$id)->orderBy('id','desc')->get();
        }
        return view('admin.portfolio_form',["data"=>$data, "album"=>$album]);
    }

    public function portfolio_add(Request $request){
        print_r("กำลังโหลด...");

        if($request->input('id')){
            $name = image_album::where('id',$request->input('id'))->select('name')->first()->name;
            $image_album_id = $request->input('id');
        }else{
            $name = $request->input('name');
        }

        $path = "assets/images/portfolio/".$name."/";
        // make directory if not found
        if(!File::isDirectory($path)){
            File::makeDirectory($path,755,true);
        }
        $path = "/".$path;
        if(!isset($image_album_id)){
            $album_arr = ["name"=>$name, "cover"=>$path.$_FILES['img']['name'][0]];
            $image_album_id = image_album::insertGetId($album_arr);
        }
        
        $total = count($_FILES['img']['name']);
        for($i=0; $i<$total; $i++) {
            $tmpFilePath = $_FILES['img']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $newFilePath = $path.$_FILES['img']['name'][$i];
                if(move_uploaded_file($tmpFilePath, ".".$newFilePath)) {
                    $image_arr = ["image_album_id"=>$image_album_id, "name"=>$_FILES['img']['name'][$i], "path"=>$newFilePath];
                    image::insert($image_arr);
                }
            }
        }
        if($request->input('id')){
            return redirect('/admin/portfolio/form/'.$request->input('id'));
        }
        return redirect('/admin/portfolio');
    }

    public function portfolio_image_delete($id = NULL){
        if($id){
            $image = image::where("id",$id)->select("image_album_id","name")->first();
            $image_album_id = $image['image_album_id'];
            $image_name = $image['name'];
            $album_name = image_album::where("id",$image_album_id)->select('name')->first()->name;
            File::delete("assets/images/portfolio/".$album_name."/".$image_name);
            image::where("id",$id)->delete();
            return redirect('/admin/portfolio/form/'.$image_album_id);
        }
    }

    public function portfolio_album_delete($id = NULL){
        if($id){
            $name = image_album::where("id",$id)->select('name')->first()->name;
            image_album::where("id",$id)->delete();
            image::where("image_album_id",$id)->delete();
            File::deleteDirectory("assets/images/portfolio/".$name);
            return redirect('/admin/portfolio');
        }
    }
}
