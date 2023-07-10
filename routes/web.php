<?php

use App\Http\Controllers\DiarioController;
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
    return view('index');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/cadastro', 'DiarioController@Cadastro')->name('cadastro');//rota para o cadastro
Route::post('/cadastrar', 'DiarioController@Cadastrar')->name('cadastrar'); //rota para salvar o formulario.
Route::get('/edit/{id}',[DiarioController::class,'Edit'])->name('editar');
Route::put('/update/{id}',[DiarioController::class,'Update'])->name('update');
Route::get('/delete/{id}',[DiarioController::class,'Delete'])->name('delete');

