<?php

use Illuminate\Database\Seeder;

class LevelFormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('level_formation')->insert([
           'name' => 'ADSI',
           'duration' => '24 meses',
           'productive_stage' => 1,
       ]);
    }
}
