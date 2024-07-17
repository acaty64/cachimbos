<?php

namespace App\Livewire;

use App\Models\Ingresante;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Grupos extends Component
{

    use WithPagination;
    public $status = 'index';
    public function render()
    {


        $grupos = DB::table('ingresantes')
            ->join('postulantes', 'ingresantes.postulante', '=', 'postulantes.postulante')
            ->leftjoin('grupo_ingresante', 'ingresantes.id', '=', 'grupo_ingresante.ingresante_id')
            ->select('ingresantes.sd',
                        'ingresantes.fac',
                        'ingresantes.car',
                        'postulantes.turno',
                        DB::raw('count(*) as cantidad'))
            ->groupBy('ingresantes.sd', 'ingresantes.fac', 'ingresantes.car', 'postulantes.turno')
            ->orderBy('sd', 'asc')
            ->orderBy('fac', 'asc')
            ->orderBy('car', 'asc')
            ->paginate(15);
        return view('livewire.grupos',['grupos' => $grupos]);
    }
}
