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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/producto', 'ProductoController@viewProducto')->name('producto');
Route::post('/correo', 'MailController@getMail')->name('email');
//Route::post('/cargaEstudiante', 'DirectorController@guardarEstudiante')->name('admin.carga');
