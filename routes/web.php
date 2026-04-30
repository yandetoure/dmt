<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a-propos', function () {
    return view('about');
});

Route::get('/materiel', function () {
    return view('materiel');
});

Route::get('/reglementation', function () {
    return view('reglementation');
});
