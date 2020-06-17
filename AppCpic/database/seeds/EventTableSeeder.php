<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('event')->insert([
           'name' => 'Feria Empresarial',
           'multimedia' => 'imgs/no-event.png',
           'description' => 'En el 2020 se realizará la feria tecnológica mas grande de la regional Caldas',
           'date_start' => '2020-07-01',
           'date_end' => '2020-07-04',
           'user_id' => 1,
           'center_id' => 1,
           ]);
    }
}
