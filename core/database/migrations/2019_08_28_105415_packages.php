<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Packages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('title')->nullable();
            $table->text('price1')->nullable();
            $table->text('price2')->nullable();
            $table->text('price3')->nullable();
            $table->text('price4')->nullable();
            $table->text('price5')->nullable();
            $table->text('day')->nullable();
            $table->text('type')->nullable();
            $table->text('category')->nullable();
            $table->text('code')->nullable();
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
