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

            $table->integer('libro_id')->unsigned();
            $table->integer('lettore_id')->unsigned();
            //$table->dateTime('create_at');
            //$table->foreign('libro')->references('id')->on('libri');
            //$table->foreign('lettore')->references('id')->on('lettori');
            $table->timestamps();
        });

        Schema::table('prestiti', function (Blueprint $table) {
            $table->foreign('libro_id')->references('id')->on('libri');
            $table->foreign('lettore_id')->references('id')->on('lettori');
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
