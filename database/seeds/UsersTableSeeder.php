<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'New User',
            'email' => 'newuser@gmail.com',
            'password'=>Hash::make('123456'),
            'remember_token' => 'asda'
        ]);
    }
}
