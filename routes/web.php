<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\escuela;

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

//Route::get('/', function () { return view('welcome'); });

//------------------------Create/Nuevo Usuario
Route::name('create')->get('create/',[escuela::class,'create']);

//------------------------Store/Guardar datos
Route::name('store')->post('store/',[escuela::class,'store']);


//------------------------Index/Listas
Route::name('lista')->get('/',[escuela::class, 'lista']);
Route::name('detalle')->get('detalle/{id}',[escuela::class,'detalle']);

//------------------------Editar/Update
Route::name('editar')->get('editar/{id}',[escuela::class,'editar']);
Route::name('salvar')->put('salvar/{id}',[escuela::class,'salvar']);

//------------------------Eliminar/Delete
Route::name('borrar')->delete('borrar/{id}',[escuela::class,'borrar']);
Route::name('borrar2')->get('borrar/{id}',[escuela::class,'borrar']);

//------------------------Ejemplo de Jquery
Route::name('ejemplo')->get('ejemplo/',[escuela::class, 'ejemplo']);
Route::name('ejemplo03')->get('ejemplo03/',[escuela::class, 'ejemplo03']);