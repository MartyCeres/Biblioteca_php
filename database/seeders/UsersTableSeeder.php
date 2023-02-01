<?php

namespace Database\Seeders;
use App\Models\User;
use App\Models\Role;

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

        $role_admin = Role::where('name', 'admin')->first();
        $role_guest = Role::where('name', 'guest')->first();

        $admin = new User();
        $admin->name= 'Martina';
        $admin->email= 'martina@gmail.com';
        $admin->password= bcrypt('martina');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $admin = new User();
        $admin->name= 'Laura';
        $admin->email= 'laura@gmail.com';
        $admin->password= bcrypt('laura');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $guest = new User();
        $guest->name= 'Mario';
        $guest->email= 'mariorossi@google.com';
        $guest->password= bcrypt('mario');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'Luca';
        $guest->email= 'lucaverdi@google.com';
        $guest->password= bcrypt('luca');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'Giulio';
        $guest->email= 'giulio.neri@google.com';
        $guest->password= bcrypt('giulio');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'Teresa';
        $guest->email= 'teresabianchi@gmail.com';
        $guest->password= bcrypt('teresa');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'Elena';
        $guest->email= 'elenafabbri@gmail.com';
        $guest->password= bcrypt('elena');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'Giulia';
        $guest->email= 'giuliaricci@gmail.com';
        $guest->password= bcrypt('giulia');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'guest';
        $guest->email= 'guest@gmail.com';
        $guest->password= bcrypt('guest');
        $guest->save();
        $guest->roles()->attach($role_guest);

    }
}
