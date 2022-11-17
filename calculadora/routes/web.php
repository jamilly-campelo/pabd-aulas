<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OperacaoController;

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

Route::get('/somar/{n1}/{n2}', [OperacaoController::class, 'somar']);
Route::get('/subtrair/{n1}/{n2}', [OperacaoController::class, 'subtrair']);
Route::get('/multiplicar/{n1}/{n2}', [OperacaoController::class, 'multiplicar']);
Route::get('/dividir/{n1}/{n2}', [OperacaoController::class, 'dividir']);
