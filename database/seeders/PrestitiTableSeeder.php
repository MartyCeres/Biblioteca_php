<?php

namespace Database\Seeders;

use App\Models\Lettore;
use App\Models\Libro;
use DB;
use Illuminate\Database\Seeder;

class PrestitiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("prestiti")->insert([

            'libro_id' => Libro::where('titolo', 'Harry Potter e il calice di fuoco')->value('id'),
            'lettore_id'=> Lettore::where('cognome', 'Verdi')->value('id')
        ]);

        DB::table("prestiti")->insert([

            'libro_id' => Libro::where('titolo', 'Divina Commedia')->value('id'),
            'lettore_id'=> Lettore::where('cognome', 'Rossi')->value('id')
        ]);

        DB::table("prestiti")->insert([

            'libro_id' => Libro::where('titolo', 'Le due torri')->value('id'),
            'lettore_id'=> Lettore::where('cognome', 'Neri')->value('id')
        ]);

    }
}
