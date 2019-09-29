<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DoctorTimes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_times', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('start')->nullable();
            $table->text('end')->nullable();
            $table->integer('doctor_id')->nullable();
            $table->text('date')->nullable();
            $table->text('visit_time')->nullable();
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
