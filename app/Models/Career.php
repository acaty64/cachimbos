<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    use HasFactory;

    protected $fillable = ['car', 'descripcion', 'fac',];
    protected $appends = ['courses', 'sd_charges'];

    public function courses($plan){
        //return 
        return Plan::select(['curso', 'tc', 'cred', 'descripcion', 'cred', 'hp', 'ht'])
                    ->where('carrera', $this->car)
                    ->where('plan', $plan)
                    ->where('curso', '<>', '150286')
                    ->get();
    } 

    public function sd_charges($sd, $plan){
        $cargas = [];
        $courses = $this->courses($plan);
        foreach ($courses as $course){
            $select = Charge::where('curso', $course->curso)
                        ->where('sd', $sd)
                        ->get();
            foreach ($select as $carga) {
                # code...
                $cargas[] = $carga;
            }
        } 
        return $cargas;
    }

    public static function sd_course_charges($sd, $course){
        return Charge::where('curso', $course->curso)
                        ->where('sd', $sd)
                        ->get();
    }

}
