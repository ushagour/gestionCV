<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\str;


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

Route::group(['middleware' => ['isloged']], function () {
    //
});

Route::get("/mesCV","Cvcontroller@index");
Route::get("/ajouterCV","Cvcontroller@Ajouter");
Route::POST("/add","Cvcontroller@Add");
Route::get("/{id}/modifier","Cvcontroller@Modifier");
Route::post("/update","Cvcontroller@Update");
Route::get("/delete/{id}","Cvcontroller@Delete");
Route::get("/tst","Cvcontroller@tst");



// pour teste relationsheps

Auth::routes();

// ROUTE QUI GERE les session de la localisation 

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', 'HomeController@index')->name('home');


//laravel 7 des nouveau fonctionnalité
 Route::get('/NewFeature',function(){



    $info= 'hi ,ali';

    $info = str::of($info)->replaceFirst('hi','hello',$info)
                        //   ->ucfirst($info);
                          ->Camel($info);



echo '<h1>'.$info.'</h1>';




 });