<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable=[

        'order_id',
        'order_date',
        'user_id',
        'phone',
        'email',
        'province',
        'payment_method',
        'descs',
        'statuss',
        'total'

    ];
    public function orderStatus(){

        return $this->belongsTo('App\OrderStatus','statuss');
    }

    public function provinces(){

        return $this->belongsTo('App\Province','province');
    }

    public function user(){

        return $this->belongsTo('App\User','user_id');
    }
}
