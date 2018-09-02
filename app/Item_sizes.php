<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_sizes extends Model
{
    //
    protected $fillable =[
        'size',
    ];

    public function items(){
        return $this->hasOne(Items::class);
    }
}
