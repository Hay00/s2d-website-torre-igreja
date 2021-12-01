<?php

use App\Http\Controllers\SaveTime;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ConfigController;

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
    return redirect('/home');
});

Route::get('/login', function () {
    return view('pages/login');
});

Route::post('login-user', function ($id) {
    return 0;
});

Route::post('save-time', [SaveTime::class, 'saveTime']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::get('/configurar', [ConfigController::class, 'index']);
Route::post('/configurar', [ConfigController::class, 'store']);

// Rotas do agendamentos
Route::get('/agendamentos', [AgendamentoController::class, 'index']);
Route::get('/agendamentos', [AgendamentoController::class, 'create']);
Route::post('/agendamentos', [AgendamentoController::class, 'store']);

