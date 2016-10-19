<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('second_name', 50)->nullable();
            $table->string('last_name', 50);
            $table->string('gender', 8);
            $table->date('dob');
            $table->string('marital_status', 50);
            $table->string('job', 255);
            $table->integer('group_id')->nullable();
            $table->string('street_of_residence', 255);
            $table->string('residence_type', 50);
            $table->string('residence_period', 50);
            $table->string('ward', 100);
            $table->string('district', 100);
            $table->string('region', 100);
            $table->string('postal_address', 255)->nullable();
            $table->string('phone_number', 255)->unique();
            $table->string('email', 255)->nullable();
            $table->string('photo_url', 255)->nullable();
            $table->integer('employee_id');
            $table->boolean('valid')->default(true);
            $table->boolean('confirmed')->default(true);
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
        Schema::drop('customers');
    }
}
