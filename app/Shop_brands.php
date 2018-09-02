<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop_brands extends Model
{
    //
    protected $fillable =[
        'shop_id',
        'name',
        'city_id',
        'address',
    ];

    public function shop(){
        return $this->belongsTo(Shops::class);
    }

    public function deliver_price(){
        return $this->hasOne(Deliver_prices::class);
    }

    public function city(){
        return $this->belongsTo(Cities::class);
    }
}
