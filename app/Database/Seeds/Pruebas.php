<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Pruebas extends Seeder
{
    public function run()
    {
        $data = [
            [
                'modelo'      => 'Corolla 2022',
                'motor'     => '1.8L VVT-i',
                'color'       => 'Blanco',
                'plazas'      => 5,
                'transmision' => 'Automática',
                'combustible' => 'Gasolina',
                
            ],
            [
                'modelo'      => 'Hilux 2021',
                'motor'     => '2.4L Turbo Diesel',
                'color'       => 'Gris',
                'plazas'      => 5,
                'transmision' => 'Manual',
                'combustible' => 'Diesel',
            ],
            [
                'modelo'      => 'Yaris Cross',
                'motor'     => '1.5L Híbrido',
                'color'       => 'Rojo',
                'plazas'      => 5,
                'transmision' => 'CVT',
                'combustible' => 'Híbrido',
            ],
        ];

        // Insertar múltiples registros en la tabla 'vehiculos'
        $this->db->table('tablanueva')->insertBatch($data);
    }
}
