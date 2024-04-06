<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\InterfaceFuncionario;

abstract class Funcionario extends Model implements InterfaceFuncionario
{
    use HasFactory;

    private $nome;

    private $idade;

    private $numerodeiscricao;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getNumeroDeIscricao() {
        return $this->numerodeiscricao;
    }

    public function setNumeroDeIscricao($numerodeiscricao) {
        $this->numerodeiscricao = $numerodeiscricao;
    }

    public function aumentarSalario($velocidade) : string {
        return "O veículo freou até: " . $velocidade . "km/h." ;
    }

    public function calcularImposto($velocidade) : string {
        return "O veículo acelerou até: " . $velocidade . "km/h." ;
    }

    /*public function __construct($nome, $idade, $numerodeiscricao) {
        $this->setNome($nome);
        $this->setIdade($idade);
        $this->setNumeroDeIscricao($numerodeiscricao);
    }*/

    public function __construct($nome, $numeroDeInscricao, $salario, $horasTrabalhadas) {
        parent::__construct($nome, $numeroDeInscricao, $salario);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }
}
