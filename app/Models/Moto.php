<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Automovel;

class Moto extends Automovel
{
    public function fazerRevisão() : string {
        return "Foi feita a revisão da sua moto! <br>";
    }
}
