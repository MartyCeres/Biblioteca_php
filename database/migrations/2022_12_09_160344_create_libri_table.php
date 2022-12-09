<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLibriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('libri', function (Blueprint $table) {
            $table->increments('id');
            $table->string('titolo', 100);
            $table->foreign('autore')->references('id')->on('Autori');
            $table->foreign('editore')->references('id')->on('editori');
            $table->int('anno');
            $table->string('genere', 50);
            $table->foreign('posizione')->references('id')->on('posizioni');
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
        Schema::dropIfExists('libri');
    }
}
