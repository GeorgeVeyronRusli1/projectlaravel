<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Furniture;

class FurnitureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $furnitureItems = [
            [
                'name' => 'Modern Sofa',
                'description' => 'A comfortable modern sofa with a sleek design.',
                'price' => 499.99,
                'material' => 'Leather',
                'color' => 'Black',
            ],
            [
                'name' => 'Dining Table',
                'description' => 'A spacious dining table made of oak wood.',
                'price' => 299.99,
                'material' => 'Wood',
                'color' => 'Brown',
            ],
            [
                'name' => 'Office Chair',
                'description' => 'Ergonomic office chair with adjustable height and lumbar support.',
                'price' => 129.99,
                'material' => 'Mesh',
                'color' => 'Gray',
            ],
            [
                'name' => 'Bed Frame',
                'description' => 'Sturdy metal bed frame with a contemporary design.',
                'price' => 249.99,
                'material' => 'Metal',
                'color' => 'White',
            ],
            [
                'name' => 'Coffee Table',
                'description' => 'Glass-top coffee table with a modern chrome finish.',
                'price' => 89.99,
                'material' => 'Glass',
                'color' => 'Silver',
            ],
            [
                'name' => 'Bookshelf',
                'description' => 'Tall bookshelf with multiple shelves for ample storage.',
                'price' => 159.99,
                'material' => 'Wood',
                'color' => 'Dark Brown',
            ],
            [
                'name' => 'TV Stand',
                'description' => 'TV stand with storage compartments and cable management.',
                'price' => 199.99,
                'material' => 'Wood',
                'color' => 'Black',
            ],
            [
                'name' => 'Dining Chair',
                'description' => 'Set of four comfortable dining chairs with padded seats.',
                'price' => 199.99,
                'material' => 'Fabric',
                'color' => 'Blue',
            ],
            [
                'name' => 'Nightstand',
                'description' => 'Compact nightstand with a drawer and shelf.',
                'price' => 69.99,
                'material' => 'Wood',
                'color' => 'White',
            ],
            [
                'name' => 'Wardrobe',
                'description' => 'Spacious wardrobe with sliding doors and hanging space.',
                'price' => 399.99,
                'material' => 'Wood',
                'color' => 'Oak',
            ],
        ];

        foreach ($furnitureItems as $item) {
            Furniture::create($item);
        }
    }
}
