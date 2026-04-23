<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vacía la tabla antes de insertar, opcional si quieres evitar duplicados
        Producto::truncate();

        // Crear 5 productos aleatorios
        Producto::factory()->count(5)->create();
    }
}
