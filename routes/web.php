<?php

use App\Models\Carga;
use App\Models\Ingresante;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/incomings', function () {
    return view('app.incomings');
});

Route::get('/groups', function () {
    return view('app.groups');
});
