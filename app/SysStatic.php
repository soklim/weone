<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SysStatic extends Model
{
    //
    protected $fillable= [
        'static_name',
        'static_value_first',
        'static_value_second',
        'static_value_third',
        'static_value_forth',
        'photo_id'
    ];

    public function photo(){
        return $this->belongsTo('App\Photo','photo_id');
    }
}
