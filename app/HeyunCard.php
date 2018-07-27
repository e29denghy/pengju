<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeyunCard extends Model
{
    //
    protected $table = 'heyun_card';
    public $timestamps = false;
    protected $fillable = ['card_id','uid','state','authorize','source','active_time',];
}
