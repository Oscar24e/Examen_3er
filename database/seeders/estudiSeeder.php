<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;

class estudiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudio=['Universal','Pixar','YouPorn'];

        for ($i=0; $i <20; $i++) { 
            DB::table('estudio')->insert([
                'nombre_estudio' => $estudio[rand(0,count($estudio)-1)]
            ]);        
        }
    }
}
