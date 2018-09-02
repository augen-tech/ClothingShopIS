<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delivers extends Model
{
    //
    protected $fillable =[
        'name',
        'description',
    ];

    public function order(){
        return $this->hasOne(Orders::class);
    }

    public function deliver_price(){
        return $this->hasOne(Deliver_prices::class);
    }

    public function deliver_crud_logs(){
        return $this->hasOne(Deliver_crud_logs::class);
    }
}
