<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kelass extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelass', function (Blueprint $table) {
            $table->id();
            $table->string('nama',50);
            $table->string('nis',15);
            $table->string('nisn',25);
            $table->string('masuk',10);
            $table->string('jk',15);
            $table->string('agama',15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelass');
    }
}
