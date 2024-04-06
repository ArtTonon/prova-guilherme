<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Senior;

class SeniorController extends Controller
{
    public function acelerar(string $marca, string $modelo, int $velocidade) {
        $senior = new Senior($marca, $modelo);
        return view('seniorAcelerar')
        ->with('senior', $senior)
        ->with('velocidade', $velocidade);
    }

    public function frear(string $marca, string $modelo, int $velocidade) {
        $senior = new Senior($marca, $modelo);
        return view('seniorFrear')
        ->with('senior', $senior)
        ->with('velocidade', $velocidade);
    }

    public function parar(string $marca, string $modelo) {
        $senior = new Senior($marca, $modelo);
        return view('seniorPara')
        ->with('senior', $senior);
    }

    public function mudarDeMarcha(string $marca, string $modelo, int $marcha) {
        $senior = new Senior($marca, $modelo);
        return view('seniorMudarDeMarcha')
        ->with('senior', $senior)
        ->with('marcha', $marcha);
    }

    public function fazerRevisão(string $marca, string $modelo) {
        $senior = new Senior($marca, $modelo);
        return view('seniorFazerRevisão')
        ->with('senior', $senior);
    }
}

