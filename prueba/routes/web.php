<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers;


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

Route::get('/explorar', [\App\Http\Controllers\HomeController::class, 'index'])->name("explorador");
Route::get('/explorar/{id}/info', [\App\Http\Controllers\HomeController::class, 'info'($id)])->name("info");


// LAS SIGUIENTES RUTAS REQUIEREN DE AUTENTIFICACIÓN
Auth::routes();

Route::group([ 'middleware'=>'auth'], function(){
    //ruta que te redirige a la vista de tus spots
    Route::get('/mios',[\App\Http\Controllers\SpotController::class, 'index'])->name('mios');
    //Rutas para crear y mostrar los spots en la vista spots
    Route::get('/spot', [\App\Http\Controllers\SpotController::class, 'show']);
    Route::post('/spot', [\App\Http\Controllers\SpotController::class, 'store'])->name("nuevoSpot");
    //Rutas para la edicion y el borrado de tus spots
    Route::delete('/destroy/{id}', [\App\Http\Controllers\SpotController::class, 'destroy'])->name("destroy");
    Route::get('/edit/{id}/edit', [\App\Http\Controllers\SpotController::class, 'edit'])->name("edit");
    
    Route::get('/dashboard', [\App\Http\Controllers\HomeController::class, 'index'])->name("dashboard");
});

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