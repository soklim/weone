<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promotion extends Model
{
    //
    protected $fillable=[

        'promo_name',
        'desc',
        'photo_id',
        'user_id',
        'from_date',
        'to_date',
        'order'

    ];


    public function user(){
        return $this->belongsTo('app\User','user_id');
    }
    public function photo(){
        return $this->belongsTo('App\Photo','photo_id');
    }

}

