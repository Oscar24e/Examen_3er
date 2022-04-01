<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\estudio;
use App\Models\pelicula;


class RelacionController extends Controller
{
    public function index(){
        $pelicula= pelicula::all();
        return view('index', compact('pelicula'));
    }
}
