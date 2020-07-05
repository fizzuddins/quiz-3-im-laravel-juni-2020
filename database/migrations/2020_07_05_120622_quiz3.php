<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Quiz3 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('username', 50);
            $table->char('email', 50);
            $table->char('password',50);
            $table->int('follower');
            $table->timestamps();
        });
        Schema::create('Artikel', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('Judul', 255);
            $table->longtext('isi');
            $table->char('Slug',255);
            $table->char('Tag',50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
