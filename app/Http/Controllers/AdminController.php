<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Entry;
use App\HeyunEntry;
use App\HeyunCard;

class AdminController extends Controller
{
    //
    public function dashboard()
    {
      // code...
      return view('admin/dashboard',["page_id"=>"dashboard"]);
    }

    public function edit(Request $request){
      $uid = $request->uid;
      $entry=HeyunEntry::where('uid',$request->uid)->first();
      if(2==$entry->state){
        $find_card=HeyunCard::where('uid',$request->uid)->first();
        $entry->card_id = $find_card->card_id;
        $entry->join_time = $find_card->create_time;
      }
      $page_id = "edit";
      return view('admin/heyun/edit',compact('page_id','entry'));
    }

    public function editinfo(Request $request)
    {
      // code...
      //dump($request);
       $uid = $request->uid;
       $http_refer = $_SERVER["HTTP_REFERER"];
       $redirect_url = $http_refer;
       if("0"==$request->editstate && null == $request->operatecard){
         return redirect($redirect_url)->withErrors(['您没有做任何修改！']);
       }
       else{
         if("0"==$request->editstate){

         }
         else{
           $update = HeyunEntry::where('uid',$request->uid)
                    ->update(['state'=>$request->editstate]);
         }
         if("1"==$request->editstate){
           $update = HeyunCard::where('uid',$request->uid)
                    ->update(['state'=>-1]);
         }
         else{
           $entry=HeyunEntry::where('uid',$request->uid)->first();
           if(2==$entry->state){
             $find_card=HeyunCard::where('uid',$request->uid)->first();
             if(empty($find_card)){
               $card_id = 'yihe'.date('Ymd').str_random(5);
               $user = HeyunCard::create([
                     'card_id'=>$card_id,
                     'uid'=>$uid,
                     'state'=>1,
                     'authorize'=>1,
                     'source' => 1,
                     'active_time'=>date("Y-m-d H:i:s"),
               ]);
             }
             else{
               $update = HeyunCard::where('uid',$request->uid)
                        ->update(['state'=>1]);
             }
           }
           else{
             return redirect($redirect_url)->withErrors(['用户尚未缴费，无法发放会员卡！']);
           }

         }
       }
       session()->flash('success', '您已经修改成功！');
       return redirect('/admin/heyun/edit?uid='.$uid);
      // $find_entry=HeyunEntry::where('uid',$request->uid)->first();
      // $find_card=HeyunCard::where('uid',$request->uid)->first();

    }

    public function heyun()
    {
      $rs=[];
      $card_list = HeyunCard::all();
      foreach ($card_list as $key => $li) {
        // code...
          $rs[$li->uid]=$li;
      }
      // code...
      $list = HeyunEntry::all();
      foreach ($list as $key => $li) {
        // code...
        if(2==$li->state){
          if(array_key_exists($li->uid,$rs)){
            $rs_li = $rs[$li->uid];
            $li->card_id = $rs_li->card_id;
            $li->join_time = $rs_li->create_time;
            $list[$key] = $li;
          }
        }
      }
      $page_id = "entry";
      //$course_name = config('course.name');
      return view('admin/heyun/entry',compact('page_id','list'));
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
