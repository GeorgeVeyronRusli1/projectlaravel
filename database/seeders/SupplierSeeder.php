<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Supplier;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        Supplier::create([
            'name' => 'Acme Furniture Co.',
            'contact_person' => 'John Doe',
            'phone' => '+1-555-1234',
            'email' => 'contact@acmefurniture.com',
            'address' => '123 Elm Street, Springfield, IL',
        ]);

        Supplier::create([
            'name' => 'Elite Woodworks',
            'contact_person' => 'Jane Smith',
            'phone' => '+1-555-5678',
            'email' => 'info@elitewoodworks.com',
            'address' => '456 Oak Avenue, Springfield, IL',
        ]);

        Supplier::create([
            'name' => 'Classic Interiors',
            'contact_person' => 'Robert Johnson',
            'phone' => '+1-555-8765',
            'email' => 'support@classicinteriors.com',
            'address' => '789 Maple Drive, Springfield, IL',
        ]);

        Supplier::create([
            'name' => 'Modern Design Inc.',
            'contact_person' => 'Emily Davis',
            'phone' => '+1-555-4321',
            'email' => 'sales@moderndesigninc.com',
            'address' => '101 Pine Road, Springfield, IL',
        ]);

        Supplier::create([
            'name' => 'Quality Furnishings',
            'contact_person' => 'Michael Brown',
            'phone' => '+1-555-6789',
            'email' => 'contact@qualityfurnishings.com',
            'address' => '202 Birch Lane, Springfield, IL',
        ]);
    }
}
