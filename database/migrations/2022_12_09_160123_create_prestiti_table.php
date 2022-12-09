<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestitiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestiti', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps('data');
            $table->foreign('libro')->references('id')->on('libri');
            $table->foreign('lettore')->references('id')->on('lettori');
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
        Schema::dropIfExists('prestiti');
    }
}
