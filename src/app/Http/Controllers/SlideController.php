<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\slide;
use File;

class SlideController extends Controller
{
    public function __construct(){
        
    }

    public function add(Request $request){
        print_r("กำลังโหลด...");
        $path = "assets/images/slider/";
        // make directory if not found
        if(!File::isDirectory($path)){
            File::makeDirectory($path,755,true);
        }
        $text = $request->text;
        $path = "/".$path;
        
        $total = count($_FILES['img']['name']);
        for($i=0; $i<$total; $i++) {
            $tmpFilePath = $_FILES['img']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $newFilePath = $path.$_FILES['img']['name'][$i];
                if(move_uploaded_file($tmpFilePath, ".".$newFilePath)) {
                    $slide_arr = ["text"=>$text[$i],"name"=>$_FILES['img']['name'][$i], "path"=>$newFilePath];
                    slide::insert($slide_arr);
                }
            }
        }

        return redirect('/admin');
    }

    public function delete($id = NULL){
        if($id){
            $slide_name = slide::where("id",$id)->select("name")->first()->name;
            File::delete("assets/images/slider/".$slide_name);
            slide::where("id",$id)->delete();
            return redirect('/admin');
        }
    }
}
