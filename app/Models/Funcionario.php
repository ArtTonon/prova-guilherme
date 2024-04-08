<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\InterfaceFuncionario;

abstract class Funcionario extends Model implements InterfaceFuncionario
{
    use HasFactory;

    private $nome;

    private $salario;

    private $numerodeiscricao;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getSalario() {
        return $this->salario;
    }

    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getNumeroDeIscricao() {
        return $this->numerodeiscricao;
    }

    public function setNumeroDeIscricao($numerodeiscricao) {
        $this->numerodeiscricao = $numerodeiscricao;
    }

    public function __construct($nome, $salario, $numerodeinscricao, $horasTrabalhadas) {
        parent::__construct($nome, $salario, $numerodeinscricao);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }
}
