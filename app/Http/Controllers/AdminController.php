<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
      // code...
      return view('admin/dashboard',["page_id"=>"dashboard"]);
    }

    public function entry()
    {
      // code...
      $list = Entry::all();
      $page_id = "entry";
      //$course_name = config('course.name');
      return view('admin/entry',compact('page_id','list'));
    }
}
