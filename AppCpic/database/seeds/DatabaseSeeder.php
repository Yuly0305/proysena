<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(DepartmentTableSeeder::class);
        $this->call(LevelFormationTableSeeder::class);
        $this->call(RegionalTableSeeder::class);
        $this->call(CenterTableSeeder::class);
        $this->call(EventTableSeeder::class);
        $this->call(ProgramTableSeeder::class);
        $this->call(OfferTableSeeder::class);
        $this->call(TrimesterTableSeeder::class);
    }
}