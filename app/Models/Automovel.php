<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\InterfaceVeiculo;

abstract class Automovel extends Model implements InterfaceVeiculo
{
    use HasFactory;

    private $marca;

    private $modelo;

    public function getMarca() {
        return $this->marca;
    }

    public function setMarca($marca) {
        $this->marca = $marca;
    }
    public function getModelo() {
        return $this->modelo;
    }

    public function setModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function acelerar($velocidade) : string {
        return "O veículo freou até: " . $velocidade . "km/h." ;
    }

    public function frear($velocidade) : string {
        return "O veículo acelerou até: " . $velocidade . "km/h." ;
    }

    public function parar() : string {
        return "O veículo parou ";
    }

    public function mudarDeMarcha($marcha) : string {
        return "O veículo mudou para a marcha: " . $marcha . "" ;
    }

    public function fazerRevisão() : string {
        return "O veículo freou até: " . $velocidade . "km/h." ;
    }

    public function __construct($marca, $modelo) {
        $this->setMarca($marca);
        $this->setModelo($modelo);
    }
}
