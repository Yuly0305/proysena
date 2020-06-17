<?php

use Illuminate\Database\Seeder;

class RegionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regional')->insert([
           'name' => 'Regional Caldas',
           'address' => 'Km vía, Cl. 10, Magdalena',
           'phone' => "(6) 8748444",
           'department_id' => 1,
       ]);
    }
}
