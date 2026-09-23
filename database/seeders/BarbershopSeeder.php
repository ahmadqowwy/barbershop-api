<?php

namespace Database\Seeders;

use App\Models\Barbershop;
use Illuminate\Database\Seeder;

class BarbershopSeeder extends Seeder
{
    public function run(): void
    {
        Barbershop::create([
            'name' => 'Qowwy Barbershop',
            'address' => 'Jl. Raya Banyuwangi No. 10',
            'phone' => '081234567890',
            'description' => 'Barbershop dengan layanan haircut dan styling.',
        ]);

        Barbershop::create([
            'name' => 'Gentleman Barbershop',
            'address' => 'Jl. Ahmad Yani No. 25',
            'phone' => '081298765432',
            'description' => 'Layanan potong rambut pria dan grooming.',
        ]);

        Barbershop::create([
            'name' => 'Classic Cut Barbershop',
            'address' => 'Jl. Diponegoro No. 15',
            'phone' => '082123456789',
            'description' => 'Barbershop dengan konsep klasik dan modern.',
        ]);
    }
}