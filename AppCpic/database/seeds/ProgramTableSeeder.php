<?php

use Illuminate\Database\Seeder;

class ProgramTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('program')->insert([
           'code' => '23534366',
           'name' => 'ADSI',
           'type_career' => 'Tecnología',
           'description' => 'Todo sobre programación',
           'title_get' => 'Tecnólogo en ADSI',
           'level_education' => 'Bachiller',
           'duration' => '24 meses',
           'working_day' => 'Mixta',
           'state' => 1,
           'admin_id' => 1,
           'center_id' => 1,
           'level_formation_id' => 1,

       ]);
    }
}
