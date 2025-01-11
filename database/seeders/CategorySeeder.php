<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'General Pallet',
            'slug' => 'general-pallet',
            'description' => 'Pallet serbaguna untuk berbagai kebutuhan logistik.',
            'image' => '/images/GeneralPallet.png',
        ]);

        Category::create([
            'name' => 'Generator Set',
            'slug' => 'generator-set',
            'description' => 'Genset berkualitas tinggi untuk suplai daya cadangan.',
            'image' => '/images/GeneratorSet.png',
        ]);
        Category::create([
            'name' => 'Industrial Equipment Support',
            'slug' => 'industrial-equipment-support',
            'description' => 'support.',
            'image' => '/images/IndustrialEquipmentSupport.png',
        ]);
        Category::create([
            'name' => 'Material Handling',
            'slug' => 'material-handling',
            'description' => 'material hand.',
            'image' => '/images/MaterialHandling.png',
        ]);
    }
}
