<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\User;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
        	'email' => 'admin@test.kom',
        	'name'	=> 'John',
        	'surname'	=> 'Admin',
        	'access_rights' => 1,
        	'password'	=> Hash::make('admin')
        ]);

        User::create([
        	'email' => 'alex@test.kom',
        	'name'	=> 'Alex',
        	'surname'	=> 'User',
        	'access_rights' => 2,
        	'password'	=> Hash::make('alex')
        ]);

        User::create([
        	'email' => 'emily@test.kom',
        	'name'	=> 'Emily',
        	'surname'	=> 'User',
        	'access_rights' => 2,
        	'password'	=> Hash::make('emily')
        ]);
    }

}