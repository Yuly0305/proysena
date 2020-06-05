<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('usuarios', function () {
    $users=App\User::take(50)->get();
    foreach($users as $user){
      echo "<li>",$user->fullname."</li>";
    }
});

Route::get('categorias', function () {
    $categories=App\Category::take(50)->get();
    foreach($categories as $categoris){
      echo "<li>",$categori->name."</li>";
    }
});
Route::get('articulos', function () {
    $articles=App\Article::take(50)->get();
    foreach($articles as $arts){
      echo "<li>",$arts->title."</li>";
    }
});


Route::resource('users', 'UserController');
// Route::resource('programas', 'ProgramaController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Reports(export)

Route::get('generate/pdf/users','UserController@pdf');
Route::get('generate/excel/users','UserController@excel');

//Search(AJAX)

Route::post('users/search', 'UserController@search');
