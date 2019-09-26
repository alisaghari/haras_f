<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    protected $table = 'carts';

    public function packages()
    {
        return $this->hasMany(order_package::class,"c_id","id")->with("users")->with("package");
    }
    public function user()
    {
        return $this->hasOne(User::class,"id","user_id");
    }

}
