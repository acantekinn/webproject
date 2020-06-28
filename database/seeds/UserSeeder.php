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
        $password = bcrypt('testtest');

        $users = [
            ['name' => 'test', 'password' => $password, 'email' => 'test@test.com'],
        ];

        DB::table('users')->insert($users);
    }
}
