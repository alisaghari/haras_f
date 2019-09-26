<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OrderPackages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('u_id')->nullable();
            $table->integer('p_id')->nullable();
            $table->integer('c_id')->nullable();
            $table->text('price')->nullable();
            $table->text('count')->nullable();
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
        //
    }
}
