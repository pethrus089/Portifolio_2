<?php

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
    return view('portifolio/index');
})->name('portifolio.index');

Route::get('/contatos', function () {
    return view('portifolio/contatos');
})->name('portifolio.contatos');

Route::get('/tecnologias', function () {
    return view('portifolio/tecnologias');
})->name('portifolio.tecnologias');

Route::get('/projetos', function () {
    return view('portifolio/projetos');
})->name('portifolio.projetos');
