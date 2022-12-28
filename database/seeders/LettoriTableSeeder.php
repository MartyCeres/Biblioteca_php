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
            'data_nascita' => '28/10/1997',
            'email' => 'laura.ferrieri@edu.unife.it'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Martina',
            'cognome' => 'Ceresoli',
            'citta' => 'Lugo',
            'data_nascita' => '16/08/1997',
            'email' => 'martina.ceresoli@edu.unife.it'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Mario',
            'cognome' => 'Rossi',
            'citta' => 'Milano',
            'data_nascita' => '05/03/1975',
            'email' => 'mariorossi@google.com'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Luca',
            'cognome' => 'Verdi',
            'citta' => 'Ferrara',
            'data_nascita' => '24/09/1993',
            'email' => 'lucaverdi@google.com'

        ]);

        DB::table("lettori")->insert([

            'nome'=> 'Giulio',
            'cognome' => 'Neri',
            'citta' => 'Bologna',
            'data_nascita' => '16/12/1989',
            'email' => 'giulio.neri@google.com'

        ]);
    }
}
