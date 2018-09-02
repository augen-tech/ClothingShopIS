<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $fillable =[
        'password',
        'email',
        'name',
        'phone_number',
        'address',
        'city_id',
        'image_source_address',
    ];

    public function city(){
        return $this->belongsTo(Cities::class);
    }

    public function order(){
        return $this->hasOne(Orders::class);
    }
    
}
