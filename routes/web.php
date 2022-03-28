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


    $listaStudenti =['pippo', 'pluto', 'paperino'];

    return view('welcome', ['nome' => 'Studente', 'cognome' => 'Boolean', 'listastudenti' => $listaStudenti]);

});

Route::get('/chi-siamo', function () {
    return 'Pagina chi siamo';
});

Route::get('/contatti', function () {
    return 'Pagina dei contatti';
});


Route::get('/pippo', function () {
    return 'PIPPO';
});
