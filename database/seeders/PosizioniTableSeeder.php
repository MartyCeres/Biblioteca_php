<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PosizioniTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("posizioni")->insert([

            'zona'=> 'A',
            'scaffale' => '1'
        ]);

        DB::table("posizioni")->insert([

            'zona'=> 'A',
            'scaffale' => '2'
        ]);

        DB::table("posizioni")->insert([

            'zona'=> 'A',
            'scaffale' => '3'
        ]);

        DB::table("posizioni")->insert([

            'zona'=> 'A',
            'scaffale' => '4'
        ]);

        DB::table("posizioni")->insert([

            'zona'=> 'B',
            'scaffale' => '1'
        ]);

        DB::table("posizioni")->insert([

            'zona'=> 'B',
            'scaffale' => '2'
        ]);

        DB::table("posizioni")->insert([

            'zona'=> 'C',
            'scaffale' => '1'
        ]);
    }
}
