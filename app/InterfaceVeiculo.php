<?php

namespace App;

interface InterfaceVeiculo
{
    public function acelerar($velocidade);

    public function frear($velocidade);

    public function parar();

    public function mudarDeMarcha($marcha);

    public function fazerRevisão();
}
