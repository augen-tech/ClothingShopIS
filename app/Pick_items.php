<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pick_items extends Model
{
    //
    protected $fillable =[
        'order_id',
        'item_id',
        'total_item',
    ];

    public function item(){
        return $this->belongsTo(Items::class);
    }

    public function order(){
        return $this->belongsTo(Orders::class);
    }
}
