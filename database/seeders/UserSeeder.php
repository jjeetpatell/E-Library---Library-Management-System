<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (\App\Models\User::count() == 0) {
            \App\Models\User::factory(1)->create();
        }
        DB::table('users')->insert([
            'name'=>'Jeet Patel',
            'username'=>'jeet',
            'password'=>Hash::make('password')
        ]);
    }
}
