<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{

    protected $table = 'documents';

    protected $fillable = [
        'id','user_id','image','type'
    ];
    public $timestamps = false;

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
