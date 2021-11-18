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

Route::get("/insertar", function(){
    DB::insert('insert into articulos (nombre_articulo, precio, pais_origen, seccion, observaciones) values (?,?,?,?,?)',
     ["Jarron", 15.4, "Japon", "Ceramica", "Ganga"]);
    
});
/*
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('welcome');
});
*/