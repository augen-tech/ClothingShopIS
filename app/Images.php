<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $fillable =[
        'source_address',
    ];

    public function items(){
        return $this->hasOne(Item_images::class);
    }
}
