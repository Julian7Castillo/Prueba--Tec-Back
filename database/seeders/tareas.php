<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class tareas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tareas=[
            [
                'Descripcion' => 'Tarea 1',
                'fecha' => '2024-06-01',
                'user_id' => 1,
                'estado' => 'pendiente',
            ],
            [
                'Descripcion' => 'Tarea 2',
                'fecha' => '2024-06-02',
                'user_id' => 1,
                'estado' => 'completada',
            ],
            [
                'Descripcion' => 'Tarea 3',
                'fecha' => '2024-06-03',
                'user_id' => ,
                'estado' => 'pendiente',
            ],
        ];
    }
}
