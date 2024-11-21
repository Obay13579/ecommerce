<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use Illuminate\Http\Request;
use App\Models\Product; // Make sure this model exists

class ProductController extends Controller
{
    /**
     * Display a listing of products
     */
    public function index()
    {
        $products = Product::paginate(12); // Adjust pagination as needed
        return view('products.index', compact('products'));
    }

    /**
     * Search products by text query
     */
    public function search(Request $request)
    {
        $query = $request->input('n');
        
        $products = Product::where('name', 'LIKE', "%{$query}%")
            ->orWhere('description', 'LIKE', "%{$query}%")
            ->orWhere('category', 'LIKE', "%{$query}%")
            ->paginate(12);

        return view('search-results', [
            'products' => $products,
            'searchQuery' => $query,
            'searchType' => 'Text Search'
        ]);
    }

    /**
     * AI Search Results Method
     */
    public function aiSearchResults(Request $request)
    {
        $detectedClasses = explode(',', $request->input('classes', ''));

        $products = Product::where(function($query) use ($detectedClasses) {
            foreach ($detectedClasses as $class) {
                $query->orWhere('category', 'LIKE', "%{$class}%")
                      ->orWhere('name', 'LIKE', "%{$class}%");
            }
        })->paginate(12);

        return view('search-results', [
            'products' => $products,
            'searchType' => 'AI Detection',
            'detectedClasses' => $detectedClasses
        ]);
    }
}
