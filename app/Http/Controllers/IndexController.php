<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;


class IndexController extends Controller
{
    //
    public function com()
    {
        $course = new Course;
        $data = $course->courseData('com');
        return view('course.high_effect_com',["page_id"=>"course","data"=>$data]);
    }

    public function sun(){
      $course = new Course;
      $data = $course->courseData('sun');
      return view('course.sunshine_heart',["page_id"=>"course","data"=>$data]);
    }
}
