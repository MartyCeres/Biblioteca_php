<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class LettoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("lettori")->insert([

            'nome'=> 'Laura',
            'cognome' => 'Ferrieri',
            'citta' => 'Lugo',
            'data_nascita' => '1997-10-28',
            'email' => 'laura.ferrieri@edu.unife.it'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Martina',
            'cognome' => 'Ceresoli',
            'citta' => 'Lugo',
            'data_nascita' => '1997-08-16',
            'email' => 'martina.ceresoli@edu.unife.it'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Mario',
            'cognome' => 'Rossi',
            'citta' => 'Milano',
            'data_nascita' => '1975-03-05',
            'email' => 'mariorossi@google.com'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Luca',
            'cognome' => 'Verdi',
            'citta' => 'Ferrara',
            'data_nascita' => '1993-09-24',
            'email' => 'lucaverdi@google.com'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Giulio',
            'cognome' => 'Neri',
            'citta' => 'Bologna',
            'data_nascita' => '1989-12-17',
            'email' => 'giulio.neri@google.com'

        ]);
    }
}
