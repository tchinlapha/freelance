<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image_album;
use App\image;
use App\about;
use App\certificate;

class ViewAdminController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        return view('admin.home',[]);
    }
    public function about()
    {
        $certificate = certificate::get();
        return view('admin.about',["certificate"=>$certificate]);
    }

    public function portfolio()
    {
        return view('admin.portfolio',[]);
    }
    public function contact()
    {
        return view('admin.contact',[]);
    }
}
