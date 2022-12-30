<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AutoriTableSeeder::class);
        $this->call(EditoriTableSeeder::class);
        $this->call(LettoriTableSeeder::class);
        $this->call(PosizioniTableSeeder::class);
        $this->call(LibroTableSeeder::class);
        $this->call(PrestitiTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
