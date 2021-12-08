<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_user = Role::where('name', 'user')->first();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@visiuzb.com.mx';
        $user->password = bcrypt('Last987.');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'User';
        $user->email = 'user@visiuzb.com.mx';
        $user->password = bcrypt('Last987.');
        $user->save();
        $user->roles()->attach($role_user);
    }
}
