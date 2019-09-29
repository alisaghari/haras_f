<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rezerv extends Model
{
    protected $table = "rezervs";
    protected $fillable = [
        'name', 'n_code','phone','father_name','birthdate','sex','status','patient_code','doctor_id','rezerv_date','rezerv_time'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','doctor_id');
    }

    /**
     * Get the relationships for the entity.
     *
     * @return array
     */
    public function getQueueableRelations()
    {
        // TODO: Implement getQueueableRelations() method.
    }

    /**
     * Get the connection of the entity.
     *
     * @return string|null
     */
    public function getQueueableConnection()
    {
        // TODO: Implement getQueueableConnection() method.
    }

    /**
     * Retrieve the model for a bound value.
     *
     * @param  mixed $value
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function resolveRouteBinding($value)
    {
        // TODO: Implement resolveRouteBinding() method.
    }
}
