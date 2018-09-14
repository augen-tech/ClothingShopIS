<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier_crud_logs extends Model
{
    //
    protected $fillable =[
        'supplier_id',
        'admin_id',
        'crud_activity_id',
        'field_name',
        'table_id'
    ];

    public function supplier(){
        return $this->belongsTo(Suppliers::class);
    }

    public function admin(){
        return $this->belongsTo(Admins::class);
    }

    public function crud_activity(){
        return $this->belongsTo(Crud_activities::class);
    }
}
