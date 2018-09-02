<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    //
    protected $fillable =[
        'order_id',
        'bank_name',
        'nominal',
        'date',
        'image_source_address',
    ];

    public function order(){
        return $this->belongsTo(Orders::class);
    }
}
