<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item_crud_logs extends Model
{
    //
    protected $fillable =[
        'item_id',
        'admin_id',
        'crud_activity_id',
        'field_name',
    ];

    public function item(){
        return $this->belongsTo(Items::class);
    }

    public function admin(){
        return $this->belongsTo(Admins::class);
    }

    public function crud_activity(){
        return $this->belongsTo(Crud_activities::class);
    }
}
