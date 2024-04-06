<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarroController extends Controller
{
    public function acelerar(string $marca, string $modelo, int $velocidade) {
        $carro = new Carro($marca, $modelo);
        return view('carroAcelerar')
        ->with('carro', $carro)
        ->with('velocidade', $velocidade);
    }

    public function frear(string $marca, string $modelo, int $velocidade) {
        $carro = new Carro($marca, $modelo);
        return view('carroFrear')
        ->with('carro', $carro)
        ->with('velocidade', $velocidade);
    }

    public function parar(string $marca, string $modelo) {
        $carro = new Carro($marca, $modelo);
        return view('carroPara')
        ->with('carro', $carro);
    }

    public function mudarDeMarcha(string $marca, string $modelo, int $marcha) {
        $carro = new Carro($marca, $modelo);
        return view('carroMudarDeMarcha')
        ->with('carro', $carro)
        ->with('marcha', $marcha);
    }

    public function fazerRevisão(string $marca, string $modelo) {
        $carro = new Carro($marca, $modelo);
        return view('carroFazerRevisão')
        ->with('carro', $carro);
    }
}
