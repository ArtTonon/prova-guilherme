<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Funcionario;

class Junior extends Funcionario
{
    public function horasTrabalhadas() : string {
        return "Foi feita a revisão do seu carro!";
    }
}
