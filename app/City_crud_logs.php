<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City_crud_logs extends Model
{
    //
    protected $fillable =[
        'city_id',
        'admin_id',
        'crud_activity_id',
        'field_name',
    ];

    public function city(){
        return $this->belongsTo(Cities::class);
    }

    public function admin(){
        return $this->belongsTo(Admins::class);
    }

    public function crud_activity(){
        return $this->belongsTo(Crud_activities::class);
    }
}
