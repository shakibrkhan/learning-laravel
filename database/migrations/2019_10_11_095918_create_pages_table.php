<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id');
            $table->mediumText('title');            
            $table->string('slug');
            $table->longText('description')->nullable();
            $table->string('featured_img')->nullable();
            $table->mediumText('page_tags')->nullable();
            $table->string('seo_title')->nullable();
            $table->mediumText('seo_description')->nullable();
            $table->string('seo_keyword')->nullable();
            $table->tinyint('publish_status');
            $table->tinyint('archive');
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
        Schema::dropIfExists('pages');
    }
}
