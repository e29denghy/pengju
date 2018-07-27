<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeyunEntry;
use App\HeyunUser;
use App\HeyunCard;
use App\Rules\Idcardrule;
use Validator;

class HeyunController extends Controller
{
    //

    public function joinus()
    {
        // code...
        return view('heyun.joinus',["title"=>config('heyun.title'),"title_1"=>config('heyun.title_1'),"title_2"=>config('heyun.title_2'),'value'=>config('heyun.value'),'value_list'=>config('heyun.value_list'),'tips'=>config('heyun.tips'),'tips_list'=>config('heyun.tips_list'),'leader'=>config('heyun.leader'),"corperation"=>config('heyun.corperation'),"page_id"=>"joinus"]);
    }

    public function joinok(Request $request)
    {
        // code...
        $type = $request->type;
        $blade = 'heyun.joinok';
        if('search_undefined'==$type){
            $return = ["title"=>'会员信息查询结果','type'=>$request->type,'value'=>config('heyun.value'),'value_list'=>config('heyun.value_list'),"page_id"=>"search"];
        }
        else{
            $return = ["title"=>'预约报名信息','code'=>$request->code,'name'=>$request->name,'mobile'=>$request->mobile,'id_card'=>$request->id_card,'type'=>$request->type,'value'=>config('heyun.value'),'value_list'=>config('heyun.value_list'),"page_id"=>"joinok"];
            $return['join_time'] = '';
            if('search'==$type){
              $find_card=HeyunCard::where('uid',$request->uid)->first();
              if(empty($find_card)){
                $is_pay = false;
              }
              else{
                $is_pay = true;
                $return['join_time'] = $find_card['create_time'];
                $return['card_id'] = $find_card['card_id'];
              }
              $return['title'] = '会员信息查询结果';
              $return['pay'] = $is_pay;
              $return['page_id'] = 'search';
            }
            $return['entry_time'] = $request->entry_time;
        }
        //dump($return);
        return view($blade,$return);
    }

    public function search(){

      return view('heyun.search',["page_id"=>"search"]);
    }

    public function qipao(){

      return view('heyun.qipao',["page_id"=>"qipao"]);
    }

    public function searchmember(Request $request){
      $rules = [
          'name'            => 'required|max:50',
          'mobile'          => 'required|regex:/^1[34578]\d{9}$/',
      ];
      $http_refer = $_SERVER["HTTP_REFERER"];
      $redirect_url = $http_refer;
      $validator = Validator::make($request->all(), $rules);
      if ($validator->fails()) {
          return redirect($redirect_url)
                      ->withErrors($validator)
                      ->withInput();
      }
      $find_entry=HeyunEntry::where('mobile',$request->mobile)->where('name',$request->name)->first();
      if(empty($find_entry)){
          session()->flash('success', '您还没有预约过，请先到预约页面报名！');
          return redirect('/heyun/joinok?type=search_undefined');
      }
      else{
          return redirect('/heyun/joinok?mobile='.$request->mobile.'&name='.$find_entry->name.'&uid='.$find_entry->uid.'&entry_time='.$find_entry->create_time.'&id_card='.$find_entry->self_id.'&code='.$find_entry->entry_code.'&type=search');
      }
    }

    public function entry(Request $request)
    {
        $rules = [
            'name'            => 'required|max:50',
            'mobile'          => 'required|regex:/^1[34578]\d{9}$/',
            //'id_card'         => [new Idcardrule],
        ];

        $http_refer = $_SERVER["HTTP_REFERER"];
        $redirect_url = $http_refer.'#joinus';
        $type='notify';
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return redirect($redirect_url)
                        ->withErrors($validator)
                        ->withInput();
        }
        $find_entry=HeyunEntry::where('mobile',$request->mobile)->orWhere('self_id',$request->id_card)->first();
        if(empty($find_entry)){
          $find_user=HeyunUser::where('mobile',$request->mobile)->first();
          //dump($find_user);
          if(empty($find_user)){
            $str = $request->name.$request->mobile.date("Y-m-d H:i:s").rand();
            $user = HeyunUser::create([
                  'uid'=>md5($str),
                  'name'=>$request->name,
                  'passwd'=>'1001',
                  'secret'=>'1001',
                  'mobile'=>$request->mobile,
                  'email'=>'',
                  'role'=>1,
                  'access'=>'',
                  'note'=>'',
                  'state'=>1,
                  'authorize'=>1,
                  'head_icon'=>'',
                  'source' => 1,
                  'active_time'=>date("Y-m-d H:i:s"),
            ]);
            //dump($user);
            if(empty($user)){

            }
            else{
                $entry = HeyunEntry::create([
                    'entry_code'=>str_random(random_int(4,6)),
                    //'self_id' => $request->id_card,
                    'self_id' => '',
                    'uid' => $user->uid,
                    'mobile' => $request->mobile,
                    'name' => $request->name,
                    'corperation'=>'',
                    'note'=>'备注',
                    'source'=> 1,
                    'state'=> 1,
                    'active_time'=>date("Y-m-d H:i:s"),
                ]);
                //dump($entry);
                 session()->flash('success', '恭喜~您已经预约成功！');
                 return redirect('/heyun/joinok?mobile='.$request->mobile.'&name='.$request->name.'&uid='.$entry->uid.'&entry_time='.$entry->active_time.'&id_card='.$request->id_card.'&code='.$entry->entry_code.'&type=entry');
            }
          }
          else{
            $find_entry=HeyunEntry::where('mobile',$request->mobile)->first();
            session()->flash('success', '您已经预约过了，请不要重复预约！');
            return redirect('/heyun/joinok?mobile='.$request->mobile.'&name='.$find_entry->name.'&uid='.$find_entry->uid.'&entry_time='.$find_entry->create_time.'&id_card='.$find_entry->self_id.'&code='.$find_entry->entry_code.'&type=search');
          }
        }
        else{
           return redirect($redirect_url)->withErrors(['您输入的手机号码或者身份证号码已经预约使用过了！']);
        }
    }
}
