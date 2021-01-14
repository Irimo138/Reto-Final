<?php

use Illuminate\Support\Facades\Auth;
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

/*
RUTAS PARA LA TRADUCCIÒN
*/
Route::group(['middleware' => ['web']], function () {
    Route::get('/', function () {
        return \Redirect::back();
    });
    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return \Redirect::back();
    })->where([
        'lang' => 'en|es|eus'
    ]);
});

Route::get('/', function () {
    return view('index');
});

// LAS SIGUIENTES RUTAS REQUIEREN DE AUTENTIFICACIÓN
Auth::routes();

Route::group(['prefix'=>'usuario', 'middleware'=>'auth'], function(){
    Route::get('/spot',[\App\Http\Controllers\SpotController::class, 'index']);
    Route::get('/spot', [\App\Http\Controllers\SpotController::class, 'show']);
    Route::post('/spot', [\App\Http\Controllers\SpotController::class, 'store'])->name("nuevoSpot");
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');




require __DIR__.'/auth.php';

/*
RUTAS PARA ADMINISTRADOR O USUARIO
Route::get('buscar/admin', function () {
    return view('admin');
});
Route::get('buscar/spots', function () {
    return view('spots');
});

Route::get('/prueba', function(){
    if(Auth::user()->rol == 'Administrador'){
        return Redirect::to('buscar/admin');
    }
    else{
        return Redirect::to('buscar/spots');
    }
});
*/