<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class StudentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('student_info', function (Blueprint $table) {
            $table->increments('student_id');
            $table->string('name');
            $table->string('department');
            $table->string('hall_name');
            $table->string('advisor');
            $table->string('level');
            $table->string('term');
            $table->string('student_type');
            $table->string('course_no');
            $table->timestamps();
            $table->string('nationality');
            $table->string('hall_transaction');
            $table->string('course_transection');
            $table->string('status');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_info');
    }
}
