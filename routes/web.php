<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get("/","Cvcontroller@index");
Route::get("/ajouterCV","Cvcontroller@Ajouter");
Route::POST("/add","Cvcontroller@Add");
Route::get("/{id}/modifier","Cvcontroller@Modifier");
Route::post("/update","Cvcontroller@Update");
Route::get("/delete/{id}","Cvcontroller@Delete");


// pour teste relationsheps
Route::get("/tst","Cvcontroller@tst");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
