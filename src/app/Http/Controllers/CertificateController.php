<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\certificate;
use File;

class CertificateController extends Controller
{
    public function __construct(){
        
    }

    public function add(Request $request){
        print_r("กำลังโหลด...");
        $path = "assets/images/certificate/";
        // make directory if not found
        if(!File::isDirectory($path)){
            File::makeDirectory($path,0777,true);
        }

        $path = "/".$path;
        
        $total = count($_FILES['img']['name']);
        for($i=0; $i<$total; $i++) {
            $date = date('YmdHis');
            $tmpFilePath = $_FILES['img']['tmp_name'][$i];
            if ($tmpFilePath != ""){
                $newFilePath = $path.$date.$_FILES['img']['name'][$i];
                if(move_uploaded_file($tmpFilePath, ".".$newFilePath)) {
                    $certificate_arr = ["name"=>$date.$_FILES['img']['name'][$i], "path"=>$newFilePath];
                    certificate::insert($certificate_arr);
                }
            }
        }

        return redirect('/admin/about');
    }

    public function delete($id = NULL){
        if($id){
            $certificate = certificate::where("id",$id)->select("name")->first();
            $certificate_name = $certificate['name'];
            File::delete("assets/images/portfolio/".$certificate_name);
            certificate::where("id",$id)->delete();
            return redirect('/admin/about');
        }
    }
}
