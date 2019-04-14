<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role_id','photo_id','isActive','',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo('App\Role','role_id');
    }
    public function isAdmin(){

        if($this->role->name=='Admin' && $this->isActive ==1){
            return true;
        }
        return false;
    }

    public function photo(){

       return $this->belongsTo('App\Photo');
    }

    public function products(){
        return $this->hasMany('App\Product');
    }

    public function promotions(){
        return $this->hasMany('App\Promotion');
    }
}
