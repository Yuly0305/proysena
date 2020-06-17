<?php

use Illuminate\Database\Seeder;

class TrimesterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trimester')->insert([
           'number' => 'Trimestre 1',
           'date_start' => '2020-07-01',
           'date_end' => '2022-06-30',
           'offer_id' => 1,
       ]);
    }
}
