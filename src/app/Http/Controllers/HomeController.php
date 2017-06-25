<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image_album;
use App\image;
use File;

class HomeController extends Controller
{
    public function __construct(){
        
    }

    public function home(){
        $data = image_album::orderBy('id','desc')->get();
        foreach ($data as $key => $val) {
            $data[$key]['count'] = image::where('image_album_id',$val['id'])->count();
        }
        return view('admin.home',["data"=>$data]);
    }

    public function home_form($id = NULL){
        $data = [];
        $album = "";
        if($id){
            $album = image_album::where('id',$id)->first();
            $data = image::where('image_album_id',$id)->orderBy('id','desc')->get();
        }
        return view('admin.home_form',["data"=>$data, "album"=>$album]);
    }

    public function home_add(Request $request){
        print_r("กำลังโหลด...");

        if($request->input('id')){
            $folder = image_album::where('id',$request->input('id'))->select('folder')->first()->folder;
            $image_album_id = $request->input('id');
        }else{
            $folder = date('YmdHis');
        }

        $description = $request->input('description');

        $path = "assets/images/home/".$folder."/";
        // make directory if not found
        if(!File::isDirectory($path)){
            File::makeDirectory($path,755,true);
        }
        $path = "/".$path;

        $album_arr = [
            "description"=>$description,
            "cover"=>$path.$_FILES['img']['name'][0]
        ];

        if(!isset($image_album_id)){
            $image_album_id = image_album::insertGetId($album_arr);
        }else{
            unset($album_arr['cover']);
            image_album::where('id',$image_album_id)->update($album_arr);
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
            return redirect('/admin/home/form/'.$request->input('id'));
        }
        return redirect('/admin/home');
    }

    public function home_image_delete($id = NULL){
        if($id){
            $slide = slide::where("id",$id)->select("id","discription")->first();
            $slide_id = $slide['id'];
            $slide_name = $slide['discription'];
            slide::where("id",$id)->delete();
            return redirect('/admin/home/form/'.$slide_id);
        }
    }

    }
}
