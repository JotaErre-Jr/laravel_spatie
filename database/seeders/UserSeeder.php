<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@system.com',
            'password' => bcrypt('123456789'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@system.com',
            'password' => bcrypt('123456789'),
        ]);
    }
}

/*
  DB::table('users')->insert([
            'name' => 'user',
            'email' => 'user@sys.com',
            //senha encriptada
            'password' => bcrypt('123456789')

    ]);


    User::create([
            'name' => 'admin',
            'email' => 'admin@sys.com',
            //senha encriptada
            'password' => bcrypt('123456789')
        ]);

        use Illuminate\Database\Seeder;
        use Illuminate\Support\Facades\DB;
        use Illuminate\Support\Facades\Hash;
        use Illuminate\Support\Str;
        use App\Models\User;
*/