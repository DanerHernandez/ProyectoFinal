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
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::resource('proveedores', App\Http\Controllers\ProveedoresController::class);

Route::resource('categorias', App\Http\Controllers\CategoriasController::class);

Route::resource('productos', App\Http\Controllers\ProductosController::class);

Route::resource('existencias', App\Http\Controllers\ExistenciasController::class);

Route::resource('empleados', App\Http\Controllers\EmpleadosController::class);

Route::resource('clientes', App\Http\Controllers\ClientesController::class);

Route::resource('locals', App\Http\Controllers\LocalController::class);


Route::resource('pedidos', App\Http\Controllers\PedidosController::class);


Route::resource('detallePedidos', App\Http\Controllers\Detalle_pedidoController::class);