<?php

namespace App\Http\Controllers;

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
            $album = image_album::where('id',$id)->first();
            $data = image::where('image_album_id',$id)->orderBy('id','desc')->get();
        }
        return view('admin.portfolio_form',["data"=>$data, "album"=>$album]);
    }

    public function portfolio_add(Request $request){
        print_r("กำลังโหลด...");

        if($request->input('id')){
            $folder = image_album::where('id',$request->input('id'))->select('folder')->first()->folder;
            $image_album_id = $request->input('id');
        }else{
            $folder = date('YmdHis');
        }

        $name = $request->input('name');
        $type = $request->input('type');
        $contractor = $request->input('contractor');
        $description = $request->input('description');
        $value = $request->input('value');

        $path = "assets/images/portfolio/".$folder."/";
        // make directory if not found
        if(!File::isDirectory($path)){
            File::makeDirectory($path,0777,true);
        }
        $path = "/".$path;

        $album_arr = [
            "folder"=>$folder,
            "type"=>$type,
            "name"=>$name,
            "contractor"=>$contractor,
            "description"=>$description,
            "value"=>$value,
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
            $date = date('YmdHis');
            $tmpFilePath = $_FILES['img']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $newFilePath = $path.$date.$_FILES['img']['name'][$i];
                if(move_uploaded_file($tmpFilePath, ".".$newFilePath)) {
                    $image_arr = ["image_album_id"=>$image_album_id, "name"=>$date.$_FILES['img']['name'][$i], "path"=>$newFilePath];
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
            $album_folder = image_album::where("id",$image_album_id)->select('folder')->first()->folder;
            File::delete("assets/images/portfolio/".$album_folder."/".$image_name);
            image::where("id",$id)->delete();
            return redirect('/admin/portfolio/form/'.$image_album_id);
        }
    }

    public function portfolio_album_delete($id = NULL){
        if($id){
            $folder = image_album::where("id",$id)->select('folder')->first()->folder;
            image_album::where("id",$id)->delete();
            image::where("image_album_id",$id)->delete();
            File::deleteDirectory("assets/images/portfolio/".$folder);
            return redirect('/admin/portfolio');
        }
    }
}
