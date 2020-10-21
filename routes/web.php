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
Route::get('/producto/lista', 'ProductoController@viewProductoLista')->name('productoLista');
Route::get('/categoria/agregar', 'CategoriaController@viewCategoria')->name('categoria');
Route::get('/marca/agregar', 'MarcaController@viewMarca')->name('marca');
Route::get('/empresa/agregar', 'EmpresaController@viewEmpresa')->name('empresa');


Route::post('/correo', 'MailController@getMail')->name('email');
Route::post('/categoria/agregar', 'CategoriaController@addCategoria')->name('categoria');
Route::post('/marca/agregar', 'MarcaController@addMarca')->name('marca');
Route::post('/empresa/agregar', 'EmpresaController@updateEmpresa')->name('empresa');
Route::post('/producto/agregar', 'ProductoController@addProducto')->name('producto');
Route::post('/producto/eliminar', 'ProductoController@deleteProducto')->name('productoEliminar');
Route::post('/producto/editar/{id}', 'ProductoController@editProducto')->name('productoEditar');
//Route::post('/cargaEstudiante', 'DirectorController@guardarEstudiante')->name('admin.carga');
