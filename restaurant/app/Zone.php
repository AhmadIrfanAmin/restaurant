<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
      protected $fillable = [
        'name','route_list','status'
    ];
}
