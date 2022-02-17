<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = "tb_alumnos";
    protected $primarikey = "id";
    protected $fillable = [
        'nombre',
        'fn',
        'matricula',
        'direccion',
        'genero',
        'email',
        'pass',
        'foto',
        'id_grupo'
    ];
}
