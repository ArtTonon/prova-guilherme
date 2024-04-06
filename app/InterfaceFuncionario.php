<?php

namespace App;

interface InterfaceFuncionario
{
    public function acelerar($velocidade);

    public function frear($velocidade);

    public function parar();

    public function mudarDeMarcha($marcha);

    public function fazerRevisão();
}
