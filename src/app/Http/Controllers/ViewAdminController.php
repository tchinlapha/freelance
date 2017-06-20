<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image_album;
use App\image;
use App\about;

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

    public function portfolio()
    {
        return view('admin.portfolio',[]);
    }
}
