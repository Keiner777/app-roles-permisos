<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
// use App\Http\Controllers\BlogController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\FichaController;
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware'=> ['auth']],function () {
    
    Route::resource('roles', RolController::class);
    Route::resource('usuarios', UsuarioController::class);
    // Route::resource('blogs', BlogController::class);
    Route::resource('aprendiz', AprendizController::class);
    Route::resource('instructor', InstructorController::class);
    Route::resource('ficha', FichaController::class);


    Route::get('download-pdf', [AprendizController::class, 'exportPDF'])->name('download-pdf');
    Route::post('aprendiz/excel', [InstructorController::class, 'importData'])->name('aprendiz/excel');
});