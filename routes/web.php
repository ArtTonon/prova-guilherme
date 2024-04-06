<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/carro/{marca}/{modelo}/acelerar/{velocidade?}',
[App\Https\Controllers\CarroController::class, 'acelerar'])
->where('velocidade', '[0-9]+');

Route::get('/carro/{marca}/{modelo}/frear/{velocidade?}',
[App\Https\Controllers\CarroController::class, 'frear'])
->where('velocidade', '[0-9]+');

Route::get('/carro/{marca}/{modelo}/parar}',
[App\Https\Controllers\CarroController::class, 'parar']);

Route::get('/carro/{marca}/{modelo}/marcha/{marcha?}',
[App\Https\Controllers\CarroController::class, 'marcha'])
->where('marcha', '[0-9]+');

Route::get('/carro/{marca}/{modelo}/fazerRevisão}',
[App\Https\Controllers\CarroController::class, 'fazerRevisão']);

Route::get('/moto/{marca}/{modelo}/acelerar/{velocidade?}',
[App\Https\Controllers\MotoController::class, 'acelerar'])
->where('velocidade', '[0-9]+');

Route::get('/moto/{marca}/{modelo}/frear/{velocidade?}',
[App\Https\Controllers\MotoController::class, 'frear'])
->where('velocidade', '[0-9]+');

Route::get('/moto/{marca}/{modelo}/parar}',
[App\Https\Controllers\MotoController::class, 'parar']);

Route::get('/moto/{marca}/{modelo}/marcha/{marcha?}',
[App\Https\Controllers\MotoController::class, 'marcha'])
->where('marcha', '[0-9]+');

Route::get('/moto/{marca}/{modelo}/fazerRevisão}',
[App\Https\Controllers\MotoController::class, 'fazerRevisão']);