<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\Tags_AssociationController;
use App\Http\Controllers\TagsController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Trae todos las personas
Route::get('/users',[PersonaController::class,'index']);

//Consulta una sola persona
Route::get('/userId/{id}', [PersonaController::class,'show']);

//Consulta una sola asociacion
Route::get('/ViewRegister/{id}', [Tags_AssociationController::class,'VIewRegister']);

//Consulta todas las asociaciones
Route::get('/ViewRegisteAll', [Tags_AssociationController::class,'index']);

//Consulta un tag para traer el nombre
Route::get('/ViewTag/{id}', [TagsController::class,'VIewTag']);

//Consulta todos los tags trae codigo y nombre
Route::get('/ViewTagAll', [TagsController::class,'index']);

//Crear tag association
Route::post('/CreateAssocition',[Tags_AssociationController::class,'store']);









