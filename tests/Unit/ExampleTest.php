<?php

namespace Tests\Unit;

use App\Models\Career;
use App\Models\Charge;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;


class ExampleTest extends TestCase
{
    use DatabaseTransactions;

    public function test_select_careers_courses(): void
    {
        $data = Career::where('car', 'ADM')->first()->courses();
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
        // $data = Career::where('car', 'ADM')->first()->charges('LIM');

        // $this->assertEquals(substr($data[0]->nombre_cur, 0, 13) , "ACTIVIDADES I");
        
    }



}
