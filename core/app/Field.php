<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{

    protected $table = 'field';

    protected $fillable = [
        'name'
    ];
    public $timestamps = false;
}
