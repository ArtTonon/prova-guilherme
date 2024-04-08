<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;

class Senior extends Funcionario
{
    protected $horasTrabalhadas;

    public function saldoAtual() {
        return parent::getSaldo() ;
    }
    
    public function aumentaSalario($aumentar) {
        if ($this->horasTrabalhadas >= 120) {
            $this->salario *= 1.20;
        }
    }

    public function calcularImposto($imposto) {
        $impostoRenda = 0.11 * $this->salario;
        $inss = 0.08 * $this->salario;
        $sindicato = 0.05 * $this->salario;
        return $impostoRenda + $inss + $sindicato;
    }

    public function __construct($nome, $salario, $numerodeinscricao, $horasTrabalhadas) {
        parent::setNome($nome);
        parent::setNumeroDeInscrição($numerodeinscricao); 
        parent::setSalario($salario);
        parent::sethorasTrabalhadas($horasTrabalhadas);
    }
}
