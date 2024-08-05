<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{

    protected $fillable = [
        'sd', 
        'fac', 
        'car', 
        'nombre_cur', 
        'capacidad', 
        'inscritos', 
        'curso', 
        'actividad', 
        'seccion', 
        'grupo', 
        'horario',
        'id_carga',
        'turno',
        'misma_facu',
        'id_modalid',
    ];

    use HasFactory;

    public function hours() {
        // MAR 08:30-10:00 - MAR 10:15-11:45 - MAR 12:00-13:30
        // DDD hh:mm-HH:MM - DDD hh:mm-HH:MM - DDD hh:mm-HH:MM
        // 123456789012345
        $ncaracter = 0;
        $hours = []; 
        $qhoras = round(strlen($this->horario)/15,0);
        for ($i=0; $i < $qhoras; $i++) { 
            $texto = substr($this->horario, ($i * 15) + ($i * 3) , 15);
            $dd = substr($texto, 0, 3);
            $h1 = substr($texto, 4, 5);
            $h2 = substr($texto, 10, 5);
            $hours[] = [
                'dia' => $dd,
                'hora_i' => $h1,
                'hora_f' => $h2
            ];

        }
        return $hours;
    }

    public static function find_id_carga($id_carga){
        return Charge::where('id_carga', $id_carga)->first();
    }



}
