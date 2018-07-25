<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\HeyunEntry;
use App\HeyunUser;
use App\Rules\Idcardrule;
use Validator;

class HeyunController extends Controller
{
    //

    public function joinus()
    {
        // code...
        return view('heyun.joinus',["title"=>config('heyun.title'),'value'=>config('heyun.value'),'value_list'=>config('heyun.value_list'),'tips'=>config('heyun.tips'),'tips_list'=>config('heyun.tips_list'),'leader'=>config('heyun.leader'),"corperation"=>config('heyun.corperation'),"page_id"=>"join"]);
    }

    public function joinok(Request $request)
    {
        // code...
        $blade = 'heyun.joinok';
        return view($blade,["title"=>'预约报名信息','code'=>$request->code,'name'=>$request->name,'mobile'=>$request->mobile,'id_card'=>$request->id_card,'value'=>config('heyun.value'),'value_list'=>config('heyun.value_list'),"page_id"=>"joinok"]);
    }

    public function search(){

      return view('heyun.search',["corperation"=>config('heyun.corperation')]);
    }

    public function entry(Request $request)
    {
        $rules = [
            'name'            => 'required|max:50',
            'mobile'          => 'required|regex:/^1[34578]\d{9}$/',
            //'id_card'         => 'required|max:18',
            'id_card'         => [new Idcardrule],
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

        $find_user=HeyunUser::where('mobile',$request->mobile)->first();
        dump($find_user);
        if(empty($find_user)){
          $user = HeyunUser::create([
                'uid'=>'denghy',
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
          dump($user);
          if(empty($user)){

          }
          else{
              $entry = HeyunEntry::create([
                  'entry_code'=>'1001',
                  'self_id' => $request->id_card,
                  'uid' => $user->uid,
                  'mobile' => $request->mobile,
                  'name' => $request->name,
                  'corperation'=>'',
                  'note'=>'备注',
                  'source'=> 1,
                  'state'=> 1,
                  'active_time'=>date("Y-m-d H:i:s"),
              ]);
              dump($entry);
               session()->flash('success', '恭喜~您已经预约成功！');
               return redirect('/heyun/joinok?mobile='.$request->mobile.'&name='.$request->name.'&id_card='.$request->id_card.'&code='.$entry->entry_code);
          }
        }
        else{
          $find_entry=HeyunEntry::where('mobile',$request->mobile)->first();
          if(empty($find_entry)){

          }
          else{
              session()->flash('success', '您已经预约过了，请不要重复预约！');
              return redirect('/heyun/joinok?mobile='.$request->mobile.'&name='.$find_entry->name.'&id_card='.$find_entry->self_id.'&code='.$find_entry->entry_code);
          }
        }
    }
}
