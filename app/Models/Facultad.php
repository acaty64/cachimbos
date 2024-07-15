<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facultad extends Model
{
    protected $fillable = ['siglas', 'area', 'descripcion', 'decano'];

    use HasFactory;
}
