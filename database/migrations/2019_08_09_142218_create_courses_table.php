<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id');
            $table->text('title_ar');
            $table->text('slug');
            $table->text('title_en');
            $table->text('body_ar');
            $table->text('body_en');
            $table->text('price');
            $table->text('author');
            $table->text('department');
            $table->text('image');
            $table->text('video_id');
            $table->integer('limit');
            $table->integer('review')->default(5);

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
