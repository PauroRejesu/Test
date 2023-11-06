<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobTitlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_titles', function (Blueprint $table) {
            $table->unsignedBigInteger('user_create_id');
            $table->unsignedBigInteger('employee_id');

            
            $table->id();
            $table->string('jobTitleDesc');
            $table->string('jobDesc');
            $table->boolean('isBoss')->default(0);
            $table->boolean('idJobTitleBoss')->default(0);
            $table->boolean('isPresident')->default(0);
            $table->double('salary',8,2);
            $table->timestamps('createDate');
            
            $table->foreign('user_create_id')->references('id')->on('users');
            $table->foreign('employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_titles');
    }
}
