<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'customer_name','last_name','address','appartment_no','buzzer','contact',
        'distance','pickup_time','status','fk_zone_id','delivery_price','delivery_price',
        'tip','tip_by','payment_method','order_price'
    ];
    public function restaurant()
    {
        return $this->belongsTo('App\Restaurant');
    }

    public function driver()
    {
        return $this->belongsTo('App\User');
    }

    
}
