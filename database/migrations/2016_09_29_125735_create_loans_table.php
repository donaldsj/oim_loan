<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('customer_id');
            $table->date('loan_date');
            $table->double('loan_amount');
            $table->double('interest');
            $table->double('penalty')->default(0);;
            $table->string('loan_purpose');
            $table->string('income_source');
            $table->string('duration', 255);
            $table->date('due_date');
            $table->double('balance');
            $table->boolean('status')->default(false);
            $table->boolean('confirmed')->default(false);
            $table->string('loan_code')->nullable();
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
        Schema::dropIfExists('loans');
    }
}
