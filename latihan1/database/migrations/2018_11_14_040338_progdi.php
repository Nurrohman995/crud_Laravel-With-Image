<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Progdi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('progdi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama_progdi',20);
            $table->string('create_datetime',14);
            $table->string('update_datetime',14);
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('progdi');
    }
}
