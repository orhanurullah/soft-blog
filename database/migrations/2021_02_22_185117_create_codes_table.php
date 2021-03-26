<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('codes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('defination');
            $table->string('excerpt');
            $table->text('content');
            $table->integer('counter')->nullable();
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('codes');
    }
}
