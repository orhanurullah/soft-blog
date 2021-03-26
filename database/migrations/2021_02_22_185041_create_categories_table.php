<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('slug')->nullable();
            $table->string('excerpt')->nullable();
            $table->text('description');
            $table->string('image')->nullable();
            $table->unsignedBigInteger('keyword_id');
            $table->unsignedInteger('parent_id')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();

            $table->foreign('keyword_id')->references('id')
                ->on('keywords')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categories');
    }
}
