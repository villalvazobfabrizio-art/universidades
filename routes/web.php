<?php

use Illuminate\Support\Facades\Route;
use App\Models\Universidad;
use App\Models\Carrera;

//Layout
Route::get('/app', function () {
    return view('layout.app');
});

//Vista Principal
Route::get('/', function () {
    return view('universidad');
});

//Ruta para universidades
Route::get('/', function () {
    $universidades = Universidad::latest()->get();
    return view('universidad', compact('universidades'));
});

//Ruta Universidad-detalle
Route:: get ('/universidades/{universidad}', function (Universidad $universidad) {
return view('universidad-detalle', compact('universidad')); // regresa los detalles de la universidad
})->name('universidades.show' ); // muestra la universidad con sus detalles


Route::get('/carreras', function () {
    $carreras = Carrera::latest()->get();
    return view('carrera', compact('carreras'));
})->name('carreras.index');

// Ruta Carrera
Route::get('/carreras/{carrera}', function (Carrera $carrera) {
    return view('carrera-detalle', compact('carrera'));
})->name('carreras.show');


