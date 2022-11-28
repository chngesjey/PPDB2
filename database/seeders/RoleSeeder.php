<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facedes\Schema;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Schema::disableForeignKeyConstraints();
       Role::truncate();
       Schema::enableForeignKeyConstraints();

       $data = [
        'admin', 'siswa'
       ];

       foreach ($data as $value) {
        Role::insert($value);
       }
    }
}
