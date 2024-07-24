<?php

namespace App\Livewire;

use App\Models\Incoming;
use Livewire\Component;
use Livewire\WithPagination;

class GroupIncoming extends Component
{
    use WithPagination;
    public $status = "index";
    public function render()
    {
    
        return view('livewire.group-incoming', [
            'incomings' => Incoming::orderBy('alumno_nombres', 'ASC')->paginate(15)
        ]);
    
    }
}
