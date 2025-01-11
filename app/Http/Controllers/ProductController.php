<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function show($categorySlug, $productSlug)
    {
        // Ambil kategori berdasarkan slug
        $category = Category::where('slug', $categorySlug)->firstOrFail();

        // Ambil produk berdasarkan slug dan kategori
        $product = Product::where('slug', $productSlug)
            ->where('category_id', $category->id)
            ->firstOrFail();

        // Definisikan breadcrumb
        $breadcrumbs = [
            ['label' => 'Home', 'url' => route('home')],
            ['label' => 'Categories', 'url' => route('categories.index')],
            ['label' => 'Product', 'url' => route('products.show', ['categorySlug' => $categorySlug, 'productSlug' => $productSlug])],
        ];

        // Kirim data produk dan breadcrumb ke Inertia
        return Inertia::render('Products/Show', [
            'product' => $product,
            'category' => $category,
            'breadcrumbs' => $breadcrumbs,
        ]);
    }
}
