<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/a-propos', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/materiel', function () {
    return view('materiel');
});

Route::get('/reglementation', function () {
    return view('reglementation');
});

Route::get('/matieres', function () {
    return view('matieres');
});

Route::get('/actualites', function () {
    return view('actualites');
});

Route::get('/actualites/{slug}', function ($slug) {
    return view('actualite-show');
});
