<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carga extends Model
{

    protected $fillable = ['sd', 'fac', 'car' , 'nombre_cur', 'capacidad', 'inscritos', 'curso', 'actividad', 'seccion', 'grupo', 'horario'];

    use HasFactory;
}
