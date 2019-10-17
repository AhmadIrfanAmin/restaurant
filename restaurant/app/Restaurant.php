<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Restaurant extends Authenticatable
{
	protected $guard = 'restaurant';

	protected $fillable = [
        'name','address','status','latitude','longitude','contact','username','password'
    ];
    protected $hidden = [
            'password',
        ];
    //
    public function orders()
    {
        return $this->hasMany('App\Order','fk_restaurant_id');
    }

    
}
