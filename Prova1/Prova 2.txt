<?php

// Definição da classe abstrata Funcionario
abstract class Funcionario {
    protected $nome;
    protected $salario;
    protected $numeroDeInscricao;

    public function __construct($nome, $salario, $numeroDeInscricao) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->numeroDeInscricao = $numeroDeInscricao;
    }

    abstract public function aumentaSalario();

    public function calcularImposto() {
        $impostoRenda = 0.11 * $this->salario;
        $inss = 0.08 * $this->salario;
        $sindicato = 0.05 * $this->salario;
        return $impostoRenda + $inss + $sindicato;
    }
}

// Classe concreta Junior
class Junior extends Funcionario {
    private $horasTrabalhadas;

    public function __construct($nome, $salario, $numeroDeInscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numeroDeInscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas >= 80) {
            $this->salario *= 1.1; // Aumenta em 10%
        }
    }
}

// Classe concreta Pleno
class Pleno extends Funcionario {
    private $horasTrabalhadas;

    public function __construct($nome, $salario, $numeroDeInscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numeroDeInscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas >= 100) {
            $this->salario *= 1.15; // Aumenta em 15%
        }
    }
}

// Classe concreta Senior
class Senior extends Funcionario {
    private $horasTrabalhadas;

    public function __construct($nome, $salario, $numeroDeInscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numeroDeInscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas >= 120) {
            $this->salario *= 1.20; // Aumenta em 20%
        }
    }
}

// Exemplo de uso
$junior = new Junior("Guilherme", 1500, 1234, 90);
$pleno = new Pleno("Ana", 2000, 5678, 110);
$senior = new Senior("Pedro", 2500, 9012, 130);

echo "Salário de Guilherme antes do aumento: " . $junior->salario . "\n";
$junior->aumentaSalario();
echo "Salário de Guilherme depois do aumento: " . $junior->salario . "\n";

echo "Imposto de renda de Ana: " . $pleno->calcularImposto() . "\n";
