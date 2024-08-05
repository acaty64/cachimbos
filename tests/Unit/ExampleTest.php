<?php

namespace Tests\Unit;

use App\Models\Career;
use App\Models\Charge;
use App\Models\User;
use DateTime;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use PhpParser\Node\Stmt\Foreach_;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function test_select_careers_courses(): void
    {

        $data = Career::where('car', 'ADM')->first()->courses('9');
        $this->assertEquals($data->first()->descripcion, "ACTIVIDADES I");

    }
    public function test_select_charges_for_career(): void
    {
        $data = Career::where('car', 'ADM')->first()->sd_charges('LIM');

        $this->assertEquals(substr($data[0]->nombre_cur, 0, 13) , "ACTIVIDADES I");
        
    }
    public function test_return_many_hours(): void
    {
        $hours = Charge::whereRaw('LENGTH(horario) > 15')->whereRaw('LENGTH(horario) < 35')->first()->hours();        
        $this->assertEquals(count($hours) , 2);
        
        $hours = Charge::whereRaw('LENGTH(horario) > 35')->whereRaw('LENGTH(horario) < 53')->first()->hours();
        $this->assertEquals(count($hours) , 3);
    }

    public function test_select_schedule_for_group_of_id(): void
    {

        $sd = 'LIM';
        $car = 'ADM';
        $plan = '9';
        $courses = Career::where('car', $car)->first()->courses($plan);
        
        $nreg = 0;
        $cursor = [];
        foreach ($courses as $key => $value) {
            $field = 'cargas' . $key+1;
            $$field = Career::sd_course_charges($sd, $value);
        }
        
        foreach ($cargas1 as $carga1) {
            $row[1] = $carga1['id_carga'];
            foreach ($cargas2 as $carga2) {
                $row[2] = $carga2['id_carga'];
                if(count($courses)>2){
                    foreach ($cargas3 as $carga3) {
                        $row[3] = $carga3['id_carga'];
                        if(count($courses)>3){
                            foreach ($cargas4 as $carga4) {
                                $row[4] = $carga4['id_carga'];
                                if(count($courses)>4){
                                    foreach ($cargas5 as $carga5) {
                                        $row[5] = $carga5['id_carga'];
                                        if(count($courses)>5){
                                            foreach ($cargas6 as $carga6) {
                                                $row[6] = $carga6['id_carga'];
                                                if(count($courses)>6){
                                                    foreach ($cargas7 as $carga7) {
                                                        $row[7] = $carga7['id_carga'];
                                                        $cursor[] = $row;
                                                        $nreg ++;
                                                    }
                                                }else{
                                                    $cursor[] = $row;
                                                    $nreg ++;
                                                }
                                            }
                                        }else{
                                            $cursor[] = $row;
                                            $nreg ++;
                                        }                        
                                    }
                                }else{
                                    $cursor[] = $row;
                                    $nreg ++;
                                }                
                            }
                        }else{
                            $cursor[] = $row;
                            $nreg ++;
                        }        
                    }
                }else{
                    $cursor[] = $row;
                    $nreg ++;
                }
            }
        }
            
        foreach ($cursor as $key_cursor => $ncursor) {
            $horas = [];
            foreach ($courses as $key => $value) {
                $ncol = $key + 1;
                $hours = Charge::find_id_carga($ncursor[$ncol])->hours();
                foreach ($hours as $key => $val_hour) {
                    $horas[] = $val_hour;
                }
            }
            $ahoras = [];
            foreach ($horas as $key => $value) {
                $clave = $value['dia'] . $value['hora_i'] . $value['hora_f']; 
                if(array_key_exists($clave, $ahoras)){
                    $ahoras[$clave] = $ahoras[$clave] + 1; 
                }else{
                    $ahoras[$clave] = 1;
                }
            }
            if(count($horas) == count($ahoras)){
                $dia  = array_column($horas, 'dia');
                $hora_i  = array_column($horas, 'hora_i');
                $hora_f  = array_column($horas, 'hora_f');
                array_multisort($dia, SORT_ASC, $hora_i, SORT_ASC, $hora_f, SORT_ASC, $horas);
                // Calcular la cantidad de horas por cada dia
                $semana = ['LUN','MAR','MIE','JUE','VIE','SAB'];
                foreach ($semana as $dia_sem) {
                    $diario = array_filter( $horas, function( $e, $dia_sem ) {
                        return $e['dia'] == $dia_sem;
                    }, ARRAY_FILTER_USE_BOTH);
                    $hora_i = '24:59';
                    $hora_f = '00:00';
                    foreach ($diario as $key => $value) {
                        if ($value['hora_i'] < $hora_i) {
                            $hora_i = $value['hora_i'];
                        }
                        if ($value['hora_f'] > $hora_f) {
                            $hora_f = $value['hora_f'];
                        }
                    }
                    $fecha1 = new DateTime('2000-01-01 ' . $hora_i . ':00');
                    $fecha2 = new DateTime('2000-01-01 ' . $hora_f . ':00');
                    $interval = $fecha1->diff($fecha2);
                    $min = $interval->days * 24 * 60;
                    $min += $interval->h * 60;
                    $min += $interval->i;
                    if(array_key_exists('0', $cursor[$key_cursor])){
                        $cursor[$key_cursor][0] = $cursor[$key_cursor][0] + $min;
                    }else{
                        $cursor[$key_cursor][0] = $min;
                    }
                }
                //dd($cursor[$key_cursor], $min);
                dd('Cursor: ' , $cursor[$key_cursor]);
                // var_dump('Cursor: ' . $key_cursor . '/' . count($cursor));
                //ob_flush();
            }else{
                $cursor[$key_cursor][0] = 'false';
            }
        }

        // Extraer NO 'false'




        // dd($cursor);
        
        // $data = Career::where('car', 'ADM')->first()->charges('LIM');

        // $this->assertEquals(substr($data[0]->nombre_cur, 0, 13) , "ACTIVIDADES I");
        
    }



}
