<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suppliers extends Model
{
    //
    protected $fillable =[
        'name',
        'description',
        'phone_number',
        'address',
        'city_id',
    ];

    public function supplier_crud_logs(){
        return $this->hasOne(Supplier_crud_logs::class);
    }

    public function city(){
        return $this->belongsTo(Cities::class);
    }
}
