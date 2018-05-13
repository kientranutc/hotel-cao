<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePtojectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('image');
            $table->string('title_en');
            $table->string('title_vi');
            $table->text('description_en');
            $table->text('description_vi');
            $table->string('meta_title_en');
            $table->string('meta_description_en');
            $table->string('meta_keyword_en');
            $table->string('meta_title_vi');
            $table->string('meta_description_vi');
            $table->string('meta_keyword_vi');
            $table->tinyInteger('active')->default(1);
            $table->string('user_create')->default('');
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
        Schema::drop('project');
    }
}
