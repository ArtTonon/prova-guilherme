<?php

abstract class Funcionario {
    protected $nome;
    protected $salario;
    protected $numeroDeInscricao;

    public function __construct($nome, $salario, $numeroDeInscricao) {
        $this->nome = $nome;
        $this->salario = $salario;
        $this->numeroDeInscricao = $numeroDeInscricao;
    }

    public function aumentaSalario() {
        $this->salario += $this->salario * 0.10;
    }

    public function calcularImposto() {
        $ir = 0.11;
        $inss = 0.08;
        $sindicato = 0.05;

        $total = $this->salario * (1 - $ir - $inss - $sindicato);

        return $total;
    }
}

class Junior extends Funcionario {
    public $horasTrabalhadas;

    public function __construct($nome, $salario, $numeroDeInscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numeroDeInscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas < 80) {
            return;
        }
        parent::aumentaSalario();
    }
}

class Pleno extends Funcionario {
    public $horasTrabalhadas;

    public function __construct($nome, $salario, $numeroDeInscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numeroDeInscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas < 100) {
            return;
        }
        parent::aumentaSalario();
        $this->salario += $this->salario * 0.15;
    }
}

class Senior extends Funcionario {
    public $horasTrabalhadas;

    public function __construct($nome, $salario, $numeroDeInscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numeroDeInscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas < 120) {
            return;
        }
        parent::aumentaSalario();
        $this->salario += $this->salario * 0.20;
    }
}
