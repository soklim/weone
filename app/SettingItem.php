<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SettingItem extends Model
{
    //
    public function settingType(){
        return $this->belongsTo('App\SettingType','type_id');
    }
}
