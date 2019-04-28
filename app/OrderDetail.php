<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    //
    protected $fillable=[

        'orderDetail_id',
        'order_id',
        'product_id',
        'qty',
        'price',
        'amount'


    ];
    public function order(){

        return $this->belongsTo('App\Orders','order_id');
    }

    public function product(){

        return $this->belongsTo('App\Product','product_id');
    }
}
