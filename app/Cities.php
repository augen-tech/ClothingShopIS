<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    //
    protected $fillable =[
        'province_id',
        'name',
    ];

    public function province(){
        return $this->belongsTo(Provinces::class);
    }

    public function city_crud_logs(){
        return $this->hasOne(City_crud_logs::class);
    }

    public function deliver_price(){
        return $this->hasOne(Deliver_prices::class);
    }

    public function shop(){
        return $this->hasOne(Shops::class);
    }

    public function shop_brand(){
        return $this->hasOne(Shop_brands::class);
    }

    public function supplier(){
        return $this->hasOne(Suppliers::class);
    }

    public function user(){
        return $this->hasOne(Users::class);
    }
}
