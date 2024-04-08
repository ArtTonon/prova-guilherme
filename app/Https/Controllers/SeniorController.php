<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Senior;

class SeniorController extends Controller
{
    protected $horasTrabalhadas;
    
    public function saldoAtual(int $nome, int $numerodeiscricao, float $salario) {
        $horasTrabalhadas = request()->query('horasTrabalhadas');
        $senior = new Senior($nome, $salario, $numerodeiscricao, $horasTrabalhadas);
        return view('seniorSalario')
        ->with('senior', $senior);
    }

    public function aumentaSalario(int $nome, int $numerodeiscricao, float $salario, float $valorAumentado) {
        $horasTrabalhadas = request()->query('horasTrabalhadas');
        $senior = new Senior($nome, $salario, $numerodeiscricao, $horasTrabalhadas);
        $senior->aumentaSalario($valorAumentado);
        return view('seniorAumentar')
        ->with('senior', $senior)
        ->with('saldoInicial', $salario)
        ->with('valorAumentar', $valorAumentado);
    }
}

