<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('first_name', 50);
            $table->string('middle_name', 50);
            $table->string('last_name', 50);
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->integer('role_id')->unsigned();
            $table->boolean('seen')->default(false);
            $table->boolean('valid')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->string('confirmation_code')->nullable();
            $table->timestamps();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
