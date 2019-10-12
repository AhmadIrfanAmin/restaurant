<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
	protected $fillable = [
        'name','address','status','latitude','longitude','contact'
    ];
    //
    public function orders()
    {
        return $this->hasMany('App\Order','fk_restaurant_id');
    }

    
}
