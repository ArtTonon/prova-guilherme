<?php

abstract class Funcionario {
    protected $nome;
    protected $salario;
    protected $numeroDeInscricao;

    public function __construct($nome, $numeroDeInscricao, $salario) {
        $this->nome = $nome;
        $this->numeroDeInscricao = $numeroDeInscricao;
        $this->salario = $salario;
    }

    public function aumentaSalario() {
        $this->salario += $this->salario * 0.10;
    }

    public function calcularImposto() {
        $this->salario -= $this->salario * 0.11;
        $this->salario -= $this->salario * 0.08;
        $this->salario -= $this->salario * 0.05;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getSalario() {
        return $this->salario;
    }
}

class Junior extends Funcionario {
    protected $horasTrabalhadas;

    public function __construct($nome, $numeroDeInscricao, $salario, $horasTrabalhadas) {
        parent::__construct($nome, $numeroDeInscricao, $salario);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas >= 80) {
            parent::aumentaSalario();
        }
    }
}

class Pleno extends Funcionario {
    protected $horasTrabalhadas;

    public function __construct($nome, $numeroDeInscricao, $salario, $horasTrabalhadas) {
        parent::__construct($nome, $numeroDeInscricao, $salario);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas >= 100) {
            $this->salario += $this->salario * 0.15;
        } else {
            parent::aumentaSalario();
        }
    }
}

class Senior extends Funcionario {
    protected $horasTrabalhadas;

    public function __construct($nome, $numeroDeInscricao, $salario, $horasTrabalhadas) {
        parent::__construct($nome, $numeroDeInscricao, $salario);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function aumentaSalario() {
        if ($this->horasTrabalhadas >= 120) {
            $this->salario += $this->salario * 0.20;
        } else {
            parent::aumentaSalario();
        }
    }
}