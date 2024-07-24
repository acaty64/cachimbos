<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\WithPagination;

class Groups extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    public $status = 'index';
    public function render()
    {


        $groups = DB::table('incomings')
            ->join('postulants', 'incomings.postulante', '=', 'postulants.postulante')
            ->leftjoin('group_incoming', 'incomings.id', '=', 'group_incoming.incoming_id')
            ->select('incomings.sd',
                        'incomings.fac',
                        'incomings.car',
                        'postulants.turno',
                        DB::raw('count(*) as cantidad'))
            ->groupBy('incomings.sd', 'incomings.fac', 'incomings.car', 'postulants.turno')
            ->orderBy('sd', 'asc')
            ->orderBy('fac', 'asc')
            ->orderBy('car', 'asc')
            ->paginate(10);
        return view('livewire.groups',['groups' => $groups]);
    }
}
