<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamplesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examples', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('excerpt')->nullable();
            $table->text('content');
            $table->integer('counter')->nullable();
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('keyword_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('code_id')->nullable();
            $table->unsignedBigInteger('post_id')->nullable();
            $table->timestamps();

            $table->foreign('keyword_id')->references('id')
                ->on('keywords')->onDelete('cascade');

            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');

            $table->foreign('code_id')->references('id')
                ->on('codes')->onDelete('cascade');

            $table->foreign('post_id')->references('id')
                ->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('examples');
    }
}
