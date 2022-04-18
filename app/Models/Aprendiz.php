<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aprendiz extends Model
{
    use HasFactory;

    protected $fillable =[

        
        'nombre',
        'apellido',
        'edad',
        'telefono',
        'email',
        'ficha',
        'nombre_programa',
        'instructor',
        'nodo',
        'imagen'
    
    ];
}
