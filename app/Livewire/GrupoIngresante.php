<?php

namespace App\Livewire;

use App\Models\Ingresante;
use Livewire\Component;
use Livewire\WithPagination;

class GrupoIngresante extends Component
{
    use WithPagination;
    public $status = "index";
    public function render()
    {
    
        return view('livewire.grupo-ingresante', [
            'ingresantes' => Ingresante::orderBy('alumno_nombres', 'ASC')->paginate(15)
        ]);
    
    }
}
