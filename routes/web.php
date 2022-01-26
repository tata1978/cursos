<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

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

Route::get('/', HomeController::class);

Route::get('cursos', [CursoController::class,'index']);

route::get('cursos/create',[CursoController::class,'create']);

route::get('cursos/{curso}',[CursoController::class,'show']);

/* route::get('cursos/{cursos}/{categoria?}', function($curso, $categoria=null){

    if($categoria){
        return "Bienvenidos al curso $curso, de la categoria $categoria";
    }else{
        return "Bienvenidos al curso de $curso";
    }
    
}); */

