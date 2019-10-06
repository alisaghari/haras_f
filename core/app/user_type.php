<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class user_type extends Model
{
    protected $table = 'user_types';

    public function users()
    {
        return $this->belongsTo(User::class,"u_id","id");
    }
}
