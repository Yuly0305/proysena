<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('categories')->insert([
           'name' => 'Technology',
           'description' => 'es una categoria de aparatos electronicos ',

       ]);
       $categorie= new App\Category;
       $categorie->name='sport';
       $categorie->description='solo son deportes';
       $categorie->save();

       $categorie= new App\Category;
       $categorie->name='home';
       $categorie->description='articulos de hogar';
       $categorie->save();
    }
}
