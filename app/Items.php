<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    //
    protected $fillable =[
        'type_item_id',
        'gender_item_id',
        'item_size_id',
        'color_id',
        'supplier_id',
        'name',
        'description',
        'price',
        'stocks',
    ];

    public function item_crud_logs(){
        return $this->hasOne(Item_crud_logs::class);
    }

    public function item_image(){
        return $this->hasOne(Item_images::class);
    }

    public function pick_item(){
        return $this->hasOne(Pick_items::class);
    }

    public function item_type(){
        return $this->belongsTo(Item_types::class);
    }

    public function gender_type(){
        return $this->belongsTo(Gender_types::class);
    }

    public function item_size(){
        return $this->belongsTo(Item_sizes::class);
    }

    public function colors(){
        return $this->belongsTo(Colors::class);
    }

    public function suppliers(){
        return $this->belongsTo(Suppliers::class);
    }
}
