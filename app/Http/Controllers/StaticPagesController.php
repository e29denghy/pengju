<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    //
    public function home()
    {
        return view('static_pages/home',["page_id"=>"home","teacher"=>config('teacher.main')]);
    }

    public function help()
    {
        return view('static_pages/help',["page_id"=>"help"]);
    }

    public function about()
    {
        return view('static_pages/about',["page_id"=>"about"]);
    }
}
