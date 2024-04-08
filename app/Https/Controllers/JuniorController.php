<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Junior;

class JuniorController extends Controller
{
    protected $horasTrabalhadas;
    
    public function saldoAtual(int $nome, int $numerodeiscricao, float $salario) {
        $horasTrabalhadas = request()->query('horasTrabalhadas');
        $junior = new Junior($nome, $salario, $numerodeiscricao, $horasTrabalhadas);
        return view('juniorSalario')
        ->with('junior', $junior);
    }

    public function aumentaSalario(int $nome, int $numerodeiscricao, float $salario, float $valorAumentado) {
        $horasTrabalhadas = request()->query('horasTrabalhadas');
        $junior = new Junior($nome, $salario, $numerodeiscricao, $horasTrabalhadas);
        $junior->aumentaSalario($valorAumentado);
        return view('juniorAumentar')
        ->with('junior', $junior)
        ->with('saldoInicial', $salario)
        ->with('valorAumentar', $valorAumentado);
    }
}
