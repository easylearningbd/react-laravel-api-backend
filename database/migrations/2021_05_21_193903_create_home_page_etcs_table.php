<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomePageEtcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home_page_etcs', function (Blueprint $table) {
            $table->id();
            $table->string('home_title');
            $table->string('home_subtitle');
            $table->text('tech_description');
            $table->string('total_student');
            $table->string('total_course');
            $table->string('total_review');
            $table->text('video_desciption');
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
        Schema::dropIfExists('home_page_etcs');
    }
}
