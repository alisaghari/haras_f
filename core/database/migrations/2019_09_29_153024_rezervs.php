<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Rezervs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rezervs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name')->nullable();
            $table->text('n_code')->nullable();
            $table->string('phone',11)->nullable();
            $table->text('father_name')->nullable();
            $table->text('birthdate')->nullable();
            $table->text('sex')->nullable();
            $table->text('status')->nullable();
            $table->integer('patient_code')->nullable();
            $table->text('doctor_id')->nullable();
            $table->text('rezerv_time')->nullable();
            $table->text('rezerv_date')->nullable();
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
