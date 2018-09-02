<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_images extends Model
{
    //
    protected $fillable =[
        'item_id',
        'image_id',
    ];

    public function item(){
        return $this->belongsTo(Items::class);
    }

    public function image(){
        return $this->belongsTo(Images::class);
    }
}
