<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {

        //Bersihkan data lama
        DB::table('products')->truncate();

        // Data produk
        $products = [
            [
                'name' => 'Grid Medium Duty',
                'slug' => 'grid-medium-duty',
                'image' => '/images/Grid Medium Duty.png',
                'gallery' => [
                    '/images/Grid Medium Duty.png',
                ], // Galeri gambar
                'specifications' => [
                    'Material' => 'Steel',
                    'Load Capacity' => '500 kg',
                    'Dimensions' => '120 x 100 x 15 cm',
                ], // Spesifikasi produk
                'category_slug' => 'general-pallet',
            ],

            [
                'name' => 'Grid Heavy Duty',
                'slug' => 'grid-heavy-duty',
                'image' => '/images/Grid Heavy Duty.png',
                'category_slug' => 'general-pallet',
            ],

            [
                'name' => 'Full Flat Heavy Duty',
                'slug' => 'full-flat-heavy-duty',
                'image' => '/images/Full Flat Heavy Duty.png',
                'category_slug' => 'general-pallet',
            ],

            [
                'name' => 'Pallet Kayu Two Way Entries',
                'slug' => 'pallet-kayu-two-way-entries',
                'image' => '/images/Pallet Kayu Two Way Entries.png',
                'category_slug' => 'general-pallet',
            ],

            [
                'name' => 'Pallet Kayu Four Way Entries',
                'slug' => 'pallet-kayu-four-way-entries',
                'image' => '/images/Pallet Kayu Four Way Entries.png',
                'category_slug' => 'general-pallet',
            ],

            [
                'name' => 'Metal Pallet Medium Duty Flat',
                'slug' => 'metal-pallet-medium-duty-flat',
                'image' => '/images/Metal Pallet Medium Duty Flat.png',
                'category_slug' => 'general-pallet',
            ],

            [
                'name' => 'Generator Set',
                'slug' => 'variaty-generator-set',
                'image' => '/images/Diesel Generator Set.png',
                'category_slug' => 'generator-set',
            ],

            [
                'name' => 'Service and Overhaul',
                'slug' => 'service-and-overhaul',
                'image' => '/images/Service and Overhaul.png',
                'category_slug' => 'generator-set',
            ],

            [
                'name' => 'Fork Cover and Magnetic Fork Cover',
                'slug' => 'fork-cover-and-magnetic-fork-cover',
                'image' => '/images/Fork Cover and Magnetic Fork Cover.png',
                'category_slug' => 'industrial-equipment-support',
            ],

            [
                'name' => 'Dock Ramp for Container',
                'slug' => 'dock-ramp-for-container',
                'image' => '/images/Dock Ramp for Container.png',
                'category_slug' => 'industrial-equipment-support',
            ],

            [
                'name' => 'Bumper Loading Dock',
                'slug' => 'bumper-loading-dock',
                'image' => '/images/Bumper Loading Dock.png',
                'category_slug' => 'industrial-equipment-support',
            ],
            [
                'name' => 'Battery Trolley',
                'slug' => 'battery-trolley',
                'image' => '/images/Battery Trolley.png',
                'category_slug' => 'industrial-equipment-support',
            ],
            [
                'name' => 'Paper Roll Clamp',
                'slug' => 'paper-roll-clamp',
                'image' => '/images/Paper Roll Clamp.png',
                'category_slug' => 'industrial-equipment-support',
            ],
            [
                'name' => 'Additional Fuel Filter ',
                'slug' => 'additional-fuel-filter',
                'image' => '/images/Additional Fuel Filter.png',
                'category_slug' => 'industrial-equipment-support',
            ],
            [
                'name' => 'Spare Part Storage',
                'slug' => 'spare-part-storage',
                'image' => '/images/Spare Part Storage.png',
                'category_slug' => 'industrial-equipment-support',
            ],
            [
                'name' => 'Pedestrian Walk Safety Laser',
                'slug' => 'pedestrian-walk-safety-laser',
                'image' => '/images/Pedestrian Walk Safety Laser.png',
                'category_slug' => 'industrial-equipment-support',
            ],

            [
                'name' => 'Forklift 3.0 to 8.0 Ton Diesel',
                'slug' => 'forklift-3.0-to-8.0-ton-diesel',
                'image' => '/images/Forklift 3.0 to 8.0 Ton Diesel.png',
                'category_slug' => 'material-handling',
            ],

            [
                'name' => 'Electric Forklift 1.5 to 3.5 Ton',
                'slug' => 'electric-forklift-1.5-to-3.5-ton',
                'image' => '/images/Electric Forklift 1.5 to 3.5 Ton.png',
                'category_slug' => 'material-handling',
            ],

            [
                'name' => 'Pallet Jack',
                'slug' => 'pallet-jack',
                'image' => '/images/Pallet Jack.png',
                'category_slug' => 'material-handling',
            ],

            [
                'name' => 'Carts and Dolly',
                'slug' => 'carts-and-dolly',
                'image' => '/images/Carts and Dolly.png',
                'category_slug' => 'material-handling',
            ],
            [
                'name' => 'Aerial Work Platform',
                'slug' => 'aerial-work-platform',
                'image' => '/images/Aerial Work Platform.png',
                'category_slug' => 'material-handling',
            ],
        ];

        // Masukkan produk ke database
        foreach ($products as $productData) {
            // Cari kategori berdasarkan slug
            $category = Category::where('slug', $productData['category_slug'])->first();

            if ($category) {
                Product::create([
                    'name' => $productData['name'],
                    'slug' => $productData['slug'],
                    'image' => $productData['image'],
                    'gallery' => json_encode($productData['gallery']), // Simpan sebagai JSON
                    'specifications' => json_encode($productData['specifications']), // Simpan sebagai JSON
                    'category_id' => $category->id,
                ]);
            }
        }
    }
}
