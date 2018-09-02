<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliver_prices extends Model
{
    //
    protected $fillable =[
        'deliver_id',
        'from_city_id',
        'to_city_id',
        'price',
    ];

    public function deliver(){
        return $this->belongsTo(Delivers::class);
    }

    public function tocity(){
        return $this->belongsTo(Cities::class);
    }

    public function fromcity_shopbrand(){
        return $this->belongsTo(Shop_brands::class);
    }

    public function fromcity_shop(){
        return $this->belongsTo(Shops::class);
    }
}
