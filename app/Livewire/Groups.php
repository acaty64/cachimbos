<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Groups extends Component
{

    use WithPagination;
    public $status = 'index';
    public function render()
    {


        $grupos = DB::table('ingresantes')
            ->join('incomings', 'incomings.postulante', '=', 'incomings.postulante')
            ->leftjoin('group_incoming', 'ingresantes.id', '=', 'grupo_ingresante.ingresante_id')
            ->select('incomings.sd',
                        'incomings.fac',
                        'incomings.car',
                        'postulants.turno',
                        DB::raw('count(*) as cantidad'))
            ->groupBy('incomings.sd', 'incomings.fac', 'incomings.car', 'postulants.turno')
            ->orderBy('sd', 'asc')
            ->orderBy('fac', 'asc')
            ->orderBy('car', 'asc')
            ->paginate(15);
        return view('livewire.grupos',['grupos' => $grupos]);
    }
}
