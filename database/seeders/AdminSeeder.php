<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Admin',
            'address' => 'Kepo ya?',
            'email' => 'fave@bncc.net',
            'password' => bcrypt('kelompok4project'),
            'is_admin' => true,
        ]);
    }
}
