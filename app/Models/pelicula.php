<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pelicula extends Model
{
    use HasFactory;
     protected $table = 'pelicula';
    public function estudio(){

        return $this->belongsTo(estudio::class, 'id_estudio');
    }
}
