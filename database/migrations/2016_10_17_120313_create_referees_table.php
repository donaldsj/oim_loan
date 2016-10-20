<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefereesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('referees', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id', 255);
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('gender', 8);
            $table->string('street_of_residence', 255);
            $table->string('residence_type', 50);
            $table->string('ward', 100);
            $table->string('district', 100);
            $table->string('region', 100);
            $table->string('job', 255);
            $table->string('work_location'); 
            $table->string('postal_address', 255)->nullable();
            $table->string('phone_number', 255)->unique();
            $table->string('email', 255)->nullable();
            $table->string('relationship');
            $table->string('photo_url', 255)->nullable();
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
        Schema::dropIfExists('referees');
    }
}
