<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gender_types extends Model
{
    //
    protected $fillable =[
        'name',
    ];

    public function items(){
        return $this->hasOne(Items::class);
    }
}
