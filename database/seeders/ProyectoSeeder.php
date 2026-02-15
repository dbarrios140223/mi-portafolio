<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProyectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
{
    $certificaciones = [
        [
            'nombre' => 'Ingeniero en Sistemas - UVEG',
            'descripcion' => 'Título profesional con especialidad en desarrollo de software y sistemas distribuidos.',
            'imagen_path' => 'captura_uveg.png',
            'link_verificacion' => '673669'
        ],
        [
            'nombre' => 'Cisco Certified Support Technician',
            'descripcion' => 'Certificación en fundamentos de redes, seguridad y resolución de problemas de conectividad.',
            'imagen_path' => 'cisco_cert.png', // Asegúrate de subir esta imagen a public/img
            'link_verificacion' => 'CS-99283'
        ],
        [
            'nombre' => 'Laravel Advanced Backend',
            'descripcion' => 'Dominio de Eloquent ORM, Service Containers y arquitectura de microservicios.',
            'imagen_path' => 'laravel_cert.png',
            'link_verificacion' => 'LAR-2026-X'
        ],
        [
            'nombre' => 'PHP Professional Developer',
            'descripcion' => 'Especialista en programación orientada a objetos (POO) y manejo de seguridad en PHP 8.x.',
            'imagen_path' => 'php_cert.png',
            'link_verificacion' => 'PHP-8221'
        ]
    ];

    foreach ($certificaciones as $cert) {
        \App\Models\Proyecto::create($cert);
    }
}
}
