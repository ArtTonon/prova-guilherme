<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Moto;

class MotoController extends Controller
{
    public function acelerar(string $marca, string $modelo, int $velocidade) {
        $moto = new Moto($marca, $modelo);
        return view('motoAcelerar')
        ->with('moto', $moto)
        ->with('velocidade', $velocidade);
    }

    public function frear(string $marca, string $modelo, int $velocidade) {
        $moto = new Moto($marca, $modelo);
        return view('motoFrear')
        ->with('moto', $moto)
        ->with('velocidade', $velocidade);
    }

    public function parar(string $marca, string $modelo) {
        $moto = new Moto($marca, $modelo);
        return view('motoPara')
        ->with('moto', $moto);
    }

    public function mudarDeMarcha(string $marca, string $modelo, int $marcha) {
        $moto = new Moto($marca, $modelo);
        return view('motoMudarDeMarcha')
        ->with('moto', $moto)
        ->with('marcha', $marcha);
    }

    public function fazerRevisão(string $marca, string $modelo) {
        $moto = new Moto($marca, $modelo);
        return view('motoFazerRevisão')
        ->with('moto', $moto);
    }
}

