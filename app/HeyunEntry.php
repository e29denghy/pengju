<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HeyunEntry extends Model
{
    //
    protected $table = 'heyun_entry';
    public $timestamps = false;
    public $card_id = '';
    public $join_time = '';
    protected $fillable = ['entry_code','self_id','uid','mobile','name','corperation','note', 'source','state','active_time',];
}
