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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::get('/acceuil', 'AcceuilController@index')->name('acceuil');
Route::get('/Nouveauevenement', 'NouveauevenementController@index')->middleware('auth')->name('Nouveauevenement');
Route::get('/Mesevenements', 'MesevenementsController@index')->middleware('auth')->name('Mesevenements');
Route::get('/MesParticipations', 'MesParticipationsController@index')->name('MesParticipations');

//Evenement
Route::post ('/evenements','NouveauevenementController@Post');


Route::get('home', function () {
    return view('welcome');
})->middleware('auth')->name('home');


Route::post('register"', function () {
    return view('/register"');
});

Route::get('auto-complete-address', [AutoAddressController::class, 'googleAutoAddress']);