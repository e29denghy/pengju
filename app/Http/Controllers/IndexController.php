<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Entry;
use Validator;


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

    public function question()
    {
        // code...

        return view('course.questionnaire',["title"=>'课程学习调查问卷',"page_id"=>"question"]);
    }

    public function signup(Request $request)
    {
        // code...
        $course_name = config('course.name');
        return view('course.signup',["title"=>'报名学习《'.$course_name[$request->course].'》课程','course'=>$request->course,"page_id"=>"signup"]);
    }

    public function signok(Request $request)
    {
        // code...
        $course_name = config('course.name');
        $type = $request->type;
        if('notify'==$type){
          $blade = 'course.notify_signup_ok';
        }
        else{
          $blade = 'course.signup_ok';
        }
        return view($blade,["title"=>'报名信息','corperation'=>$request->corperation,'name'=>$request->name,'mobile'=>$request->mobile,"page_id"=>"signok"]);
    }

    public function notify(Request $request)
    {
        $course = new Course;
        $data = $course->courseData('com_open');
        $course_name = config('course.name');
        $to = $request->to;
        return view('course.notify',["title"=>"邓宏伟老师《高效沟通》实战公开课(免费)邀请函",'course'=>$request->course,"page_id"=>$to,"data"=>$data]);
    }

    public function entry(Request $request)
    {
        $rules = [
            'corperation'        => 'required|max:255',
            'contact'            => 'required|max:50',
            'mobile'             => 'required|regex:/^1[34578]\d{9}$/',
        ];

        $http_refer = $_SERVER["HTTP_REFERER"];
        if(false!==strpos($http_refer,'notify')){
          $redirect_url = $http_refer.'#entry';
          $type='notify';
        }
        else{
          $redirect_url = $http_refer;
          $type='ok';
        }

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect($redirect_url)
                        ->withErrors($validator)
                        ->withInput();
        }

        $entry = Entry::create([
            'class_id'=>'1001',
            'course_id'=>$request->course,
            'uid'=>'test',
            'mobile' => $request->mobile,
            'name' => $request->contact,
            'corperation'=>$request->corperation,
            'source' => 1,
            'note'=>'备注',
        ]);
        session()->flash('success', '恭喜~您已经报名成功！');
        return redirect('/signok?mobile='.$request->mobile.'&name='.$request->contact.'&corperation='.$request->corperation.'&type='.$type);
    }
}
