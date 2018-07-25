<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeyunUser extends Model
{
    //
    protected $table = 'heyun_user';
    public $timestamps = false;
    protected $fillable = ['uid','name','passwd','secret','mobile','email', 'role','access','note','state','authorize','head_icon','source','active_time',];
}
