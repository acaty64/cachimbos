<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupIncoming extends Model
{
    use HasFactory;

    protected $fillable = ['ingresante_id', 'grupo_id'];

}
