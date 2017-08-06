<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Chapters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chapters', function (Blueprint $table) {
            $table->string('chapter_id');
            $table->string('course_id');
            $table->string('chapter_name');
            $table->string('chapter_order');
            $table->text('chapter_description');
            $table->string('chapter_image');
            $table->string('chapter_learning_method');
            $table->string('chapter_date');
            $table->timestamps();
            $table->primary('chapter_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chapters');
    }
}
