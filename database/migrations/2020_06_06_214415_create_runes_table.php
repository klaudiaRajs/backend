<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRunesTable extends Migration
{
    public function up()
    {
        Schema::create('runes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image_url');
            $table->json('bonus');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('runes');
    }
}
