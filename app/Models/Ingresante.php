<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingresante extends Model
{
    use HasFactory;

    protected $appends = ['turno', 'grupo'];
    protected $fillable = ['alumno_nombres', 'alumno', 'fac', 'car', 'sd', 'mod', 'postulante'];

    public function getTurnoAttribute()
    {
        $turno = Postulante::where('postulante', $this->postulante)->first()->turno;
        return substr($turno,0,1); 
    }
    public function grupo()
    {
        return $this->belongsToMany('App\Models\Grupo');
    }
}
