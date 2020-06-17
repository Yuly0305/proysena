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
    	DB::table('users')->insert([
    		'fullname'  => 'Administrador',
    		'email'     => 'administrado@hotmail.com',
    		'phone' 	=> 3013973772,
    		'birthdate' => '1995-02-02',
    		'password'  => Hash::make('admin'),
    	]);
    }
}