<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estudio extends Model
{
    use HasFactory;
    protected $table = 'estudio';

    public function pelicula(){
        return $this->hasMany(pelicula::class, 'id');
    }
}
