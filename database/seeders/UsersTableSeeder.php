<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("users")->insert([

            'name'=> 'Laura',
            'email' => 'laura.ferrieri@edu.unife.it',
            'password' => 'laura',
            'role' => 'admin'
        ]);

        DB::table("users")->insert([

            'name'=> 'Martina',
            'email' => 'martina.ceresoli@edu.unife.it',
            'password' => 'martina',
            'role' => 'admin'
        ]);

        DB::table("users")->insert([

            'name'=> 'Giulia',
            'email' => 'giulia_guest@gmail.com',
            'password' => 'giulia',
            'role' => 'guest'
        ]);
        
    }
}
