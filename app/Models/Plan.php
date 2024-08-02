<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['carrera', 'plan', 'tc', 'curso', 'descripcion', 'cred', 'ht', 'hp'];




}
