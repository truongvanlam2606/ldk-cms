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
     *
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->string('slug', 191)->unique();
            $table->string('description');
            $table->text('content');
            $table->string('thumbnail');
            $table->string('product_video');
            $table->string('template');
            $table->string('parent_of_page');
            $table->string('seo_title_meta');
            $table->string('seo_description_meta');
            $table->string('seo_image_meta');
            $table->tinyInteger('status');
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
