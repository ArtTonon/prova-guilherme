<?php

namespace App;

interface InterfaceFuncionario
{
    public function saldoAtual();
    
    public function aumentaSalario($aumentar);

    public function calcularImposto($imposto);
    
}
