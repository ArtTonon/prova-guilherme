<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Junior;

class JuniorController extends Controller
{
    public function acelerar(string $marca, string $modelo, int $velocidade) {
        $junior = new Junior($marca, $modelo);
        return view('juniorAcelerar')
        ->with('junior', $junior)
        ->with('velocidade', $velocidade);
    }

    public function frear(string $marca, string $modelo, int $velocidade) {
        $junior = new Junior($marca, $modelo);
        return view('juniorFrear')
        ->with('junior', $junior)
        ->with('velocidade', $velocidade);
    }

    public function parar(string $marca, string $modelo) {
        $junior = new Junior($marca, $modelo);
        return view('juniorPara')
        ->with('junior', $junior);
    }

    public function mudarDeMarcha(string $marca, string $modelo, int $marcha) {
        $junior = new Junior($marca, $modelo);
        return view('juniorMudarDeMarcha')
        ->with('junior', $junior)
        ->with('marcha', $marcha);
    }

    public function fazerRevisão(string $marca, string $modelo) {
        $junior = new Junior($marca, $modelo);
        return view('juniorFazerRevisão')
        ->with('junior', $junior);
    }
}
