<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliver_crud_logs extends Model
{
    //
    protected $fillable =[
        'deliver_id',
        'admin_id',
        'crud_activity_id',
        'field_name',
        'table_id'
    ];

    public function deliver(){
        return $this->belongsTo(Delivers::class);
    }

    public function admin(){
        return $this->belongsTo(Admins::class);
    }

    public function crud_activity(){
        return $this->belongsTo(Crud_activities::class);
    }
}
