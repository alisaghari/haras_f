<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order_package extends Model
{
    protected $table = 'order_packages';

    public function users()
    {
        return $this->hasMany(user_package::class,"o_id","id");
    }
    public function package()
    {
        return $this->hasOne(package::class,"id","p_id");
    }
}
