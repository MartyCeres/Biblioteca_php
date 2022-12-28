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

            $table->integer('autore_id')->unsigned();
            $table->integer('editore_id')->unsigned();
            //$table->foreign('autore')->references('id')->on('Autori');
            //$table->foreign('editore')->references('id')->on('editori');
            $table->integer('anno');
            $table->string('genere', 50);
            $table->integer('posizione_id')->unsigned();
            //$table->foreign('posizione')->references('id')->on('posizioni');
            $table->timestamps();
        });

        Schema::table('libri', function (Blueprint $table) {
            $table->foreign('autore_id')->references('id')->on('Autori');
            $table->foreign('editore_id')->references('id')->on('editori');
            $table->foreign('posizione_id')->references('id')->on('posizioni');
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
