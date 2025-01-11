<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Inertia\Inertia;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all()->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'slug' => $category->slug,
                'description' => $category->description,
                'image' => $category->image,
                'url' => route('categories.show', $category->slug), // Pastikan ini menghasilkan URL valid
            ];
        });

        return Inertia::render('Categories/Index', [
            'categories' => $categories,
        ]);
    }
    public function show($slug)
{
    // Ambil kategori berdasarkan slug
    $category = Category::with('products')->where('slug', $slug)->firstOrFail();

    // Definisikan breadcrumb
    $breadcrumbs = [
        ['label' => 'Home', 'url' => route('home')],
        ['label' => 'Categories', 'url' => route('categories.index')],
        ['label' => $category->name, 'url' => route('categories.show', $category->slug)],
    ];

    // Kustomisasi data produk yang dikirim ke frontend (hanya informasi dasar)
    $categoryData = [
        'id' => $category->id,
        'name' => $category->name,
        'slug' => $category->slug,
        'description' => $category->description,
        'products' => $category->products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'slug' => $product->slug,
                'description' => $product->description,
                'image' => $product->image, // Menampilkan gambar produk
            ];
        }),
    ];

    // Mengembalikan data kategori dan produk ke frontend
    return Inertia::render('Categories/Show', [
        'category' => $categoryData,
        'breadcrumbs' => $breadcrumbs,
    ]);
}

    // public function show($slug)
    // {
    //     // Fetch the data for the category based on the slug
    //     $category = Category::where('slug', $slug)->firstOrFail();

    //     // Define breadcrumbs
    //     $breadcrumbs = [
    //         ['label' => 'Home', 'url' => route('home')],
    //         ['label' => 'Categories', 'url' => route('categories.index')],
    //         ['label' => $category->name, 'url' => route('categories.show', $category->slug)],
    //     ];

    //     return Inertia::render('Categories/Show', [
    //         'category' => $category,
    //         'breadcrumbs' => $breadcrumbs,
    //     ]);
    // }
}
