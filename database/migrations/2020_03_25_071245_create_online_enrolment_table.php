<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineEnrolmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_enrolment', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id');
            $table->string('name', 50);
            $table->string('gender', 10);
            $table->string('course', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('online_enrolment');
    }
}
