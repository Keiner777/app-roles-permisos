<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// spatie 
use Spatie\Permission\Models\Permission;

class SeaderTablaPermisos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permisos=[

            // usuarios 
            'ver-usuario',
            // tablas roles 
            'ver-rol',
            'crear-rol',
            'editar-rol',
            'borrar-rol',
            // tabla instructor 
            'ver-instructor',
            'crear-instructor',
            'editar-instructor',
            'borrar-instructor',

            // tabla ficha 
            'ver-ficha',
            'crear-ficha',
            'editar-ficha',
            'borrar-ficha',

            // tabla aprendiz 
            'ver-aprendiz',
            'editar-aprendiz',

        ];
        foreach ($permisos as $permiso) {
           Permission::create(['name'=>$permiso]);
        }
    }
}
