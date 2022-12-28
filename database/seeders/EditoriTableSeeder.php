<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class EditoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("editori")->insert([

            'nome'=> 'Salani',
            'citta' => 'Milano'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Zanichelli',
            'cognome' => 'Bologna'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Bonpiani',
            'cognome' => 'Milano'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Fazi',
            'cognome' => 'Roma'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Mondadori',
            'cognome' => 'Milano'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Feltrinelli',
            'cognome' => 'Milano'
        ]);


    }
}
