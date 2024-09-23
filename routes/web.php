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
    // creo array e passo la chiave al file home.blade.php
    $messaggioArray = [
        'message' => 'Metodo 1 : Hello laravel passato con l\'array'
    ];
    $messaggioCompact = 'Metodo 2 : Hello Laravel con la funzione compact';
    // restituisco il messaggio
    return view('home', $messaggioArray, compact('messaggioCompact'));
});
