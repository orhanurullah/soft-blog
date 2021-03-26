<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->nullable();
            $table->string('excerpt')->nullable();
            $table->text('content');
            $table->boolean('is_active')->default(true);
            $table->integer('counter')->nullable();
            $table->unsignedBigInteger('keyword_id')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->timestamps();

            $table->foreign('keyword_id')->references('id')
                ->on('keywords')->onDelete('cascade');

            $table->foreign('category_id')->references('id')
                ->on('categories')->onDelete('cascade');
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
