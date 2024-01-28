<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstagramsTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instagrams_tables', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('username', 50);
            $table->integer('posts')->nullable();
            $table->integer('follower')->nullable();
            $table->integer('following')->nullable();
            $table->text('pfp')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instagrams_tables');
    }
}
