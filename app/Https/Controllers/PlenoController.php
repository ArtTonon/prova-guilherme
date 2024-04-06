<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Pleno;

class PlenoController extends Controller
{
    public function acelerar(string $marca, string $modelo, int $velocidade) {
        $pleno = new Pleno($marca, $modelo);
        return view('plenoAcelerar')
        ->with('pleno', $pleno)
        ->with('velocidade', $velocidade);
    }

    public function frear(string $marca, string $modelo, int $velocidade) {
        $pleno = new Pleno($marca, $modelo);
        return view('plenoFrear')
        ->with('pleno', $pleno)
        ->with('velocidade', $velocidade);
    }

    public function parar(string $marca, string $modelo) {
        $pleno = new Pleno($marca, $modelo);
        return view('plenoPara')
        ->with('pleno', $pleno);
    }

    public function mudarDeMarcha(string $marca, string $modelo, int $marcha) {
        $pleno = new Pleno($marca, $modelo);
        return view('plenoMudarDeMarcha')
        ->with('pleno', $pleno)
        ->with('marcha', $marcha);
    }

    public function fazerRevisão(string $marca, string $modelo) {
        $pleno = new Pleno($marca, $modelo);
        return view('plenoFazerRevisão')
        ->with('pleno', $pleno);
    }
}

