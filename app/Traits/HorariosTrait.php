<?php

namespace App\Traits;

use App\Models\Career;
use Illuminate\Support\Facades\DB;

trait HorariosTrait {

    public function id_charges(Career $car){
        $courses = $car->courses();

        $id_charges = DB::table('charges')
            ->rightjoin('courses', 'charges.curso', '=', 'courses.curso')
            ->select('charges.id_carga',
                        'charges.curso',
                        'charges.seccion',
                        'charges.grupo',
                        'charges.turno',);

        return $id_charges;
    }

}