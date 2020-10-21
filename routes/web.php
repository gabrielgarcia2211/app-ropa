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


Route::get('/producto/agregar', 'ProductoController@viewProducto')->name('producto');
Route::get('/categoria/agregar', 'CategoriaController@viewCategoria')->name('categoria');
Route::get('/marca/agregar', 'MarcaController@viewMarca')->name('marca');


Route::post('/correo', 'MailController@getMail')->name('email');
Route::post('/categoria/agregar', 'CategoriaController@addCategoria')->name('categoria');
Route::post('/marca/agregar', 'MarcaController@addMarca')->name('marca');
//Route::post('/cargaEstudiante', 'DirectorController@guardarEstudiante')->name('admin.carga');
