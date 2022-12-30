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
            'citta' => 'Bologna'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Bompiani',
            'citta' => 'Milano'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Fazi',
            'citta' => 'Roma'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Mondadori',
            'citta' => 'Milano'
        ]);

        DB::table("editori")->insert([

            'nome'=> 'Feltrinelli',
            'citta' => 'Milano'
        ]);


    }
}
