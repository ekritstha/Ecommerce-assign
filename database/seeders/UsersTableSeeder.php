<?php

namespace Database\Seeders;

use App\Models\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

// use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!User::find(1)) {
            $user = User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('password'),
            'country' => 'Nepal',
            'address' => 'Kathmandu',
            'zipcode' => '44600',
            'phone' => '9841000000',
            'bio' => 'i am admin'
            ]);

            // $role = Role::create(['guard_name'=>'web', 'name' => 'writer']);
            // $user->syncRoles(['writer']);
        }
    }
}
