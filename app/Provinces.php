<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provinces extends Model
{
    //
    protected $fillable =[
        'name',
    ];

    public function province_crud_logs(){
        return $this->hasOne(Province_crud_logs::class);
    }

    public function city(){
        return $this->hasOne(Cities::class);
    }

}
