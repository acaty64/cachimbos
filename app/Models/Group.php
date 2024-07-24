<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    protected $fillable = ['sd', 'fac', 'car', 'turno', 'grupo', 'cantidad'];
    public function incomings()
    {
        return $this->belongsToMany('App\Models\Incomings');
    }
}
