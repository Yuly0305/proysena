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
           'fullname' => 'Esneider Garcia',
           'email' => 'esneiderGmonroy@hotmail.com',
           'phone' => 3013973772,
           'birthdate' => '1995-02-02',
           'gender' => 'Male',
           'address' => 'cra 32 a 26-17',
           'role' => 'Admin',
           'password' => Hash::make('admin'),
       ]);

       $user= new App\User;
       $user->fullname='Jeremias Springfield';
       $user->email='JeremiasQgmail.com';
       $user->phone='3127552445';
       $user->birthdate='1986-03-12';
       $user->gender='Male';
       $user->address='Street calle siempre viva';
       $user->role='Admin';
       $user->password=bcrypt('admin');
       $user->save();

       factory(App\User::class,20)->create();

    }
}
