<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SlideShow extends Model
{
    //
    protected $fillable=[

        'slide_name',
        'order',
        'photo_id'

    ];

    public function photo(){

        return $this->belongsTo('App\Photo','photo_id');

    }
}


