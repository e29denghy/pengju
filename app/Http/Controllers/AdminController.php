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
        $entry->join_time = $find_card->join_time;
      }
      $page_id = "edit";
      return view('admin/heyun/edit',compact('page_id','entry'));
    }

    public function editinfo(Request $request)
    {
      // code...
      $uid = $request->uid;
      $find_entry=HeyunEntry::where('uid',$request->uid)->first();
      $find_card=HeyunCard::where('uid',$request->uid)->first();

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
