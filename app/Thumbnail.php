<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thumbnail extends Model
{
    //
    protected $uploads = '/images/';

    protected $fillable=['item_id',
        'file'
    ];

    public function getFileAttribute($photo){

        return $this->uploads. $photo;

    }
}
