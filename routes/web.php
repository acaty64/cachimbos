<?php

use App\Models\Carga;
use App\Models\Ingresante;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ingresantes', function () {
    return view('app.ingresantes');
});

Route::get('/grupos', function () {
    return view('app.grupos');
});
