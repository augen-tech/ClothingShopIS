<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud_activities extends Model
{
    //
    protected $fillable =[
        'action',
    ];

    public function deliver_crud_logs(){
        return $this->hasOne(Deliver_crud_logs::class);
    }

    public function supplier_crud_logs(){
        return $this->hasOne(Supplier_crud_logs::class);
    }
    
    public function province_crud_logs(){
        return $this->hasOne(Province_crud_logs::class);
    }

    public function item_crud_logs(){
        return $this->hasOne(Item_crud_logs::class);
    }

    public function order_crud_logs(){
        return $this->hasOne(Order_crud_logs::class);
    }

    public function city_crud_logs(){
        return $this->hasOne(City_crud_logs::class);
    }
}
