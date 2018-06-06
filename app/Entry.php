<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entry extends Model
{
    //
    protected $table = 'win_entry';
    public $timestamps = false;
    protected $fillable = ['class_id','course_id','uid','mobile','name','corperation', 'source','note',];
    //
    public function dataList()
    {
      // code...
      $list = [
        '1'=>[
          'name'=>'邓红宇',   //姓名
          'corperation'=>'深圳市招赢天下文化传播有限公司',  //手机号码
          'mobile'=>'13528765507',  //手机号码
          'create_time'=>'2017/02/18 14:00:23',   //报名时间
          'course'=>'高效沟通',//课程名称
          'source'=>'线下',//报名来源
          'note'=>'备注',
        ],
        '2'=>[
          'name'=>'向仕来',   //姓名
          'corperation'=>'深圳市君耀电子有限公司',  //手机号码
          'mobile'=>'13428997627',  //手机号码
          'create_time'=>'2017/02/18 14:00:23',   //报名时间
          'course'=>'阳光心态',//课程名称
          'source'=>'订阅号',//报名来源
          'note'=>'备注',
        ],
        '3'=>[
          'name'=>'邓红宇',   //姓名
          'corperation'=>'深圳市招赢天下文化传播有限公司',  //手机号码
          'mobile'=>'13528765507',  //手机号码
          'create_time'=>'2017/02/18 14:00:23',   //报名时间
          'course'=>'高效沟通',//课程名称
          'source'=>'线下',//报名来源
          'note'=>'备注',
        ],
        '4'=>[
          'name'=>'向仕来',   //姓名
          'corperation'=>'深圳市君耀电子有限公司',  //手机号码
          'mobile'=>'13428997627',  //手机号码
          'create_time'=>'2017/02/18 14:00:23',   //报名时间
          'course'=>'阳光心态',//课程名称
          'source'=>'订阅号',//报名来源
          'note'=>'备注',
        ],
      ];
      return $list;
    }
}
