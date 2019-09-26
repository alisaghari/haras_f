<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('f_name')->nullable();
            $table->text('l_name')->nullable();
            $table->text('username')->nullable();
            $table->text('n_code')->nullable();
            $table->string('phone',11)->unique();
            $table->text('password')->nullable();
            $table->text('verify')->nullable();
            $table->text('google_auth')->nullable();
            $table->text('tell')->nullable();
            $table->text('bithdate')->nullable();
            $table->text('cart')->nullable();
            $table->text('hesab')->nullable();
            $table->text('shaba')->nullable();
            $table->text('saheb_hesab')->nullable();
            $table->text('domain')->nullable();
            $table->text('fa_domain')->nullable();
            $table->text('address')->nullable();
            $table->text('status')->nullable();
            $table->text('type')->nullable();
            $table->text('type_namayandeh')->nullable();
            $table->text('level_bazaryab')->nullable();
            $table->text('register_date')->nullable();
            $table->text('user_code')->nullable();
            $table->text('level_bime')->nullable();
            $table->text('organ_name')->nullable();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
