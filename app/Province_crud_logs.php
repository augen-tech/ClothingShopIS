<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Province_crud_logs extends Model
{
    //
    protected $fillable =[
        'province_id',
        'admin_id',
        'crud_activity_id',
        'field_name',
        'table_id'
    ];

    public function province(){
        return $this->belongsTo(Provinces::class);
    }

    public function admin(){
        return $this->belongsTo(Admins::class);
    }

    public function crud_activity(){
        return $this->belongsTo(Crud_activities::class);
    }
}
