<?php

namespace App\Imports;

use App\Models\Aprendiz;
use Maatwebsite\Excel\Concerns\ToModel;

class AprendizImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Aprendiz([
            

            'nombre'    => $row['0'],
            'apellido'  => $row['1'],
            'edad'      => $row['2'],
            'telefono'  => $row['3'],
            'email'     => $row['4'],
            'ficha'     => $row['5'],
            'nombre_programa'=> $row['6'],
            'instructor'     => $row['7'],
            'nodo'           => $row['8'],
            'imagen'         => $row['9']

        ]);
    }
}
