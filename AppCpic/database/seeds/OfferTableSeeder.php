<?php

use Illuminate\Database\Seeder;

class OfferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offer')->insert([
           'code_id' => '1804230',
           'day_time' => 'De Lunes a Viernes de 7:00 am a 1:00 pm',
           'date_inscription' => '2020-06-01',
           'requirements' => 'Ninguno',
           'modality' => 'Presencial',
           'program_id' => 1,
       ]);
    }
}
