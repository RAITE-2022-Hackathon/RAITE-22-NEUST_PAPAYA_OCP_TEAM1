<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'role_id' => 1,
                'fname' => 'Kevin',
                'lname' => 'Caluag',
                'email' => 'superadmin@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'role_id' => 3,
                'fname' => 'Kevins',
                'lname' => 'Caluags',
                'email' => 'superadmins@gmail.com',
                'password' => Hash::make('password'),
            ]
            ]);
    }
}
