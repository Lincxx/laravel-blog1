<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name' => 'Jeremy Lincoln',
        	'email' => 'bossco28@gmail.com',
        	'password' => bcrypt(123456)
        ]);
    }
}
