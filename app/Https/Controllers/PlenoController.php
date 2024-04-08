<?php

namespace App\Https\Controllers;

use Illuminate\Http\Request;
use App\Models\Pleno;

class PlenoController extends Controller
{
    protected $horasTrabalhadas;
    
    public function saldoAtual(int $nome, int $numerodeiscricao, float $salario) {
        $horasTrabalhadas = request()->query('horasTrabalhadas');
        $pleno = new Pleno($nome, $salario, $numerodeiscricao, $horasTrabalhadas);
        return view('plenoSalario')
        ->with('pleno', $pleno);
    }

    public function aumentaSalario(int $nome, int $numerodeiscricao, float $salario, float $valorAumentado) {
        $horasTrabalhadas = request()->query('horasTrabalhadas');
        $pleno = new Pleno($nome, $salario, $numerodeiscricao, $horasTrabalhadas);
        $pleno->aumentaSalario($valorAumentado);
        return view('plenoAumentar')
        ->with('pleno', $pleno)
        ->with('saldoInicial', $salario)
        ->with('valorAumentar', $valorAumentado);
    }
}

