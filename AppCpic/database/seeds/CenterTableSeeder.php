<?php

use Illuminate\Database\Seeder;

class CenterTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('center')->insert([
           'number' => '8',
           'name' => 'Centro de Proceso Indutriales y Construcción',
           'color' => 'Azul',
           'regional_id' => 1,
       ]);
    }
}
