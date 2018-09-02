<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $fillable =[
        'user_id',
        'deliver_id',
        'shipping_address',
        'total',
        'created_at',
        'status',
    ];

    public function user(){
        return $this->belongsTo(Users::class);
    }

    public function deliver(){
        return $this->belongsTo(Delivers::class);
    }

    public function pick_item(){
        return $this->hasOne(Pick_items::class);
    }

    public function payment(){
        return $this->hasOne(Payments::class);
    }

    public function order_crud_logs(){
        return $this->hasOne(Order_crud_logs::class);
    }

}
