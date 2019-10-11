<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->mediumText('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('featured_img');
            $table->mediumText('page_tags');
            $table->string('seo_title');
            $table->mediumText('seo_description');
            $table->string('seo_keyword');
            $table->mediumText('categories');
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
        Schema::dropIfExists('posts');
    }
}
