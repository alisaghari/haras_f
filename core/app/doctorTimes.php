<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class doctorTimes extends Model
{
    protected $table = "doctor_times";
    protected $fillable = [
        'start', 'end','doctor_id','date','visit_time','state'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','doctor_id');
    }
}
