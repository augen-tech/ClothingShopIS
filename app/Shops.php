<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    //
    protected $fillable =[
        'name',
        'city_id',
        'address',
        'image',
    ];

    public function shop_brand(){
        return $this->hasOne(Shop_brands::class);
    }

    public function deliver_price(){
        return $this->hasOne(Deliver_prices::class);
    }

    public function city(){
        return $this->belongsTo(Cities::class);
    }
}
