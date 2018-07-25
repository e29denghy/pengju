<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeyunCard extends Model
{
    //
    protected $table = 'heyun_card';
    public $timestamps = false;
    protected $fillable = ['class_id','course_id','uid','mobile','name','corperation', 'source','note',];
}
