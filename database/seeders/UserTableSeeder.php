<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use DB;
use Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id' => 1,
            'name' => 'Admin',
            'email' => 'admin@ppdb.com',
            'password' => bcrypt('admin'),
            'remember_token' => Str::random(20),
            'status' => 'active'
        ]);

        // DB::table('users')->insert([
        //     'role_id' => 2,
        //     'name' => 'jojo',
        //     'email' => 'jojo@gmail.com',
        //     'password' => bcrypt('jojo'),
        //     'remember_token' => Str::random(20),
        //     'status' => 'inactive'
        // ]);
    }
}
