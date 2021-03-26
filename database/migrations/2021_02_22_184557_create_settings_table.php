<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title')->unique();
            $table->string('logo')->nullable();
            $table->string('description');
            $table->string('email_address')->nullable();
            $table->string('email_password')->nullable();
            $table->string('email_host_address')->nullable();
            $table->text('about_text')->nullable();
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('instagram')->nullable();
            $table->string('youtube')->nullable();
            $table->unsignedBigInteger('keyword_id');
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
        Schema::dropIfExists('settings');
    }
}
