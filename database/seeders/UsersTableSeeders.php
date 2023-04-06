<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seed\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Helmi Fadillah Iksan',
            'email' => 'helmiiksan@gmail.com',
            'password' => Hash::make('helmi111')
        ]);
    }
}
