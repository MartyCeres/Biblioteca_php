<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class AutoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table("Autori")->insert([

            'nome'=> 'J. K.',
            'cognome' => 'Rowling'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'Dante',
            'cognome' => 'Alighieri'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'J. R. R.',
            'cognome' => 'Tolkien'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'Stephenie',
            'cognome' => 'Meyer'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'C. S.',
            'cognome' => 'Lewis'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'Nicholas',
            'cognome' => 'Sparks'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'Umberto',
            'cognome' => 'Eco'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'Suzanne',
            'cognome' => 'Collins'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'Rick',
            'cognome' => 'Riordan'
        ]);

        DB::table("Autori")->insert([

            'nome'=> 'ciao',
            'cognome' => 'sono'
        ]);



    }
}
