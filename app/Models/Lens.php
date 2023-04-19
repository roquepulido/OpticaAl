<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lens extends Model
{
    use HasFactory;
    protected $fillable = [
        "tipo",
        "esfera",
        "cilindro",
        "eje",
        "adicion",
        "altura",
        "dip",
        "laboratorio_id",
        "esmerilado_id",
        "status",
        "comentarios"
    ];
}
