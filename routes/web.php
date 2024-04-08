<?php

use Illuminate\Support\Facades\Route;

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/funcionario/junior/{nome}/{salario}/{numeroDeInscricao}',
[App\Https\Controllers\JuniorController::class, 'saldoAtual'])
    ->where('nome', '[a-zA-Z]+')
    ->where('numeroDeInscricao', '[0-9]+')
    ->where('salario', '[0-9]+\.[0-9]+');

Route::get('/funcionario/junior/{nome}/{salario}/{numeroDeInscricao}/horasTrabalhadas/{aumentar}', 
[App\Https\Controllers\JuniorController::class, 'aumentaSalario'])
    ->where('nome', '[a-zA-Z]+')
    ->where('salario', '[0-9]+')
    ->where('numeroDeInscricao', '[0-9]+')
    ->where('aumentar', '[0-9]+\.[0-9]+');

Route::get('/funcionario/pleno/{nome}/{salario}/{numeroDeInscricao}',
[App\Https\Controllers\PlenoController::class, 'saldoAtual'])
    ->where('nome', '[a-zA-Z]+')
    ->where('numeroDeInscricao', '[0-9]+')
    ->where('salario', '[0-9]+\.[0-9]+');

Route::get('/funcionario/pleno/{nome}/{salario}/{numeroDeInscricao}/horasTrabalhadas/{aumentar}', 
[App\Https\Controllers\PlenoController::class, 'aumentaSalario'])
    ->where('nome', '[a-zA-Z]+')
    ->where('salario', '[0-9]+')
    ->where('numeroDeInscricao', '[0-9]+')
    ->where('aumentar', '[0-9]+\.[0-9]+');

Route::get('/funcionario/senior/{nome}/{salario}/{numeroDeInscricao}',
[App\Https\Controllers\SeniorController::class, 'saldoAtual'])
    ->where('nome', '[a-zA-Z]+')
    ->where('numeroDeInscricao', '[0-9]+')
    ->where('salario', '[0-9]+\.[0-9]+');

Route::get('/funcionario/senior/{nome}/{salario}/{numeroDeInscricao}/horasTrabalhadas/{aumentar}', 
[App\Https\Controllers\SeniorController::class, 'aumentaSalario'])
    ->where('nome', '[a-zA-Z]+')
    ->where('salario', '[0-9]+')
    ->where('numeroDeInscricao', '[0-9]+')
    ->where('aumentar', '[0-9]+\.[0-9]+');

Route::get('/params/{pathInteiro?}/{pathString?}}',
[App\Https\Controllers\ParamController::class, 'param'])
->where('pathInteiro', '[0-9]+')
->where('pathString', '[A-Za-z]+');