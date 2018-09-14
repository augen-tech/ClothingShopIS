<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_crud_logs extends Model
{
    //
    protected $fillable =[
        'order_id',
        'admin_id',
        'crud_activity_id',
        'field_name',
        'table_id'
    ];

    public function order(){
        return $this->belongsTo(Orders::class);
    }

    public function admin(){
        return $this->belongsTo(Admins::class);
    }

    public function crud_activity(){
        return $this->belongsTo(Crud_activities::class);
    }
}
