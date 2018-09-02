<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_types extends Model
{
    //
    protected $fillable =[
        'name',
        'description',
    ];

    public function items(){
        return $this->hasOne(Items::class);
    }
}
