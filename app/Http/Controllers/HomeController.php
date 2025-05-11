<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $categories = Product::select('category')
            ->inStock()
            ->distinct()
            ->get()
            ->pluck('category');

        $featuredProducts = collect();

        if ($categories->count() >= 3) {
            $selectedCategories = $categories->random(3);

            $primaryCategory = $selectedCategories->random();
            $otherCategories = $selectedCategories->reject(function($category) use ($primaryCategory) {
                return $category === $primaryCategory;
            });

            $primaryProducts = Product::where('category', $primaryCategory)
                ->inStock()
                ->inRandomOrder()
                ->take(2)
                ->get();

            $featuredProducts = $featuredProducts->merge($primaryProducts);

            foreach ($otherCategories as $category) {
                $product = Product::where('category', $category)
                    ->inStock()
                    ->inRandomOrder()
                    ->first();

                if ($product) {
                    $featuredProducts = $featuredProducts->push($product);
                }
            }
            $featuredProducts = $featuredProducts->shuffle();
        } else {
            $featuredProducts = Product::inStock()
                ->inRandomOrder()
                ->take(4)
                ->get();
        }

        return view('home', compact('featuredProducts'));
    }
}
