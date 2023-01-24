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
        $guest->name= 'guest';
        $guest->email= 'guest@gmail.com';
        $guest->password= bcrypt('guest');
        $guest->save();
        $guest->roles()->attach($role_guest);

        $guest = new User();
        $guest->name= 'Giulia';
        $guest->email= 'giulia_guest@gmail.com';
        $guest->password= bcrypt('guest');
        $guest->save();
        $guest->roles()->attach($role_guest);
        
    }
}
