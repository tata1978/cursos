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

Route::get('/', HomeController::class)->name('home');//pagina principal

/* Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');

route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

route::post('cursos',[CursoController::class, 'store'])->name('cursos.store');

route::get('cursos/{curso}',[CursoController::class,'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destoy'); */

//EN UNA SOLA LINEA DE CODIGO PODEMOS RESUMIR LAS 7 RUTAS ANTERIORES

route::resource('cursos', CursoController::class);

route::view('nosotros', 'nosotros')->name('nosotros');// route::view se usa para paginas estaticas