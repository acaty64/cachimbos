<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incoming extends Model
{
    use HasFactory;

    protected $appends = ['turno', 'grupo'];
    protected $fillable = ['alumno_nombres', 'alumno', 'fac', 'car', 'sd', 'mod', 'postulante'];

    public function turno()
    {
        return $this->hasOne(Postulant::class, "postulante", "postulante");
    }
    public function grupo()
    {
        return $this->belongsToMany('App\Models\Grupo');
    }
}