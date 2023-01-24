<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;


class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'access to all function';
        $role_admin->save();

        $role_guest = new Role();
        $role_guest->name = 'guest';
        $role_guest->description = 'access to your profile';
        $role_guest->save();
    }
}
