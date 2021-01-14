<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\spotController;

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
Route::get('buscar/admin', function () {
    return view('admin');
});
Route::get('buscar/spots', function () {
    return view('spots');
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/spot',[SpotController::class, 'index']);
//Route::get('/spot', "App\Http\Controllers\spotController@show");
//Route::post('/spot/crearspot', [spotController::class, 'show'])->name("mostrar");
Route::post('/spot/crearspot', [SpotController::class, 'store'])->name("crear");

Route::get('/prueba', function(){
    if(Auth::user()->rol == 'Administrador'){
        return Redirect::to('buscar/admin');
    }
    else{
        return Redirect::to('buscar/spots');
    }
});

require __DIR__.'/auth.php';