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
    $data = [
        'nome' => 'Mario',
        'cognome' => 'Rossi',
        'ordini' => [
            'ordine 1',
            'ordine 2',
            'ordine 3'
        ]
    ];
    return view('home', $data);
});
