<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use App\Models\estudio;

class peliculasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $peliculas=['night_flyerd','Zombies','holakase'];
        $estudio= estudio::all();

        for ($i=0; $i <20; $i++) { 
            DB::table('pelicula')->insert([
                'nombre_pelicula' => $peliculas[rand(0,count($peliculas)-1)],
                'id_estudio' => $estudio->random()->id
            ]);        
        }
    }
}
