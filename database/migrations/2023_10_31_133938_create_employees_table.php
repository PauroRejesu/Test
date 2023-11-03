<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->unsignedBigInteger('createUser');

            $table->id();
            $table->string('names');
            $table->string('lastNames');
            $table->string('employeeId');
            $table->string('addres');
            $table->string('phoneNumber');
            $table->string('bornCity');
            $table->string('photo');
            $table->timestamps('createDate');

            $table->foreign('createUser')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
