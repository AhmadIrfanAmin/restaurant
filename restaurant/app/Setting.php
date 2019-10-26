<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = [
        'meta_tag','meta_label','meta_key','meta_value','meta_input','restaurant_url','is_admin'
    ];
    
}
