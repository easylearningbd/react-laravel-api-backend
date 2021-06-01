<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('short_title');
            $table->string('short_description');
            $table->string('small_img');
            $table->string('long_title');
            $table->text('long_description');
            $table->string('total_duration');
            $table->string('total_lecture');
            $table->string('total_student');
            $table->text('skill_all');
            $table->string('video_url');
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
        Schema::dropIfExists('courses');
    }
}
