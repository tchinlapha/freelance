<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{

    public function __construct()
    {
        
    }
    public function home()
    {
        return view('pages.home',["page"=>"home"]);
    }
    public function service()
    {
        return view('pages.service',["page"=>"service"]);
    }
    public function portfolio()
    {
        return view('pages.portfolio',["page"=>"portfolio"]);
    }
    public function contact()
    {
        return view('pages.contact',["page"=>"contact"]);
    }
}
