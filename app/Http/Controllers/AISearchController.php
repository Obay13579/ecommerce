<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
// use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class AISearchController extends Controller
{
    public function searchByImage(Request $request)
    {
        try {
            // Validate the uploaded file
            $request->validate([
                'image' => 'required|image|max:5120' // Max 5MB
            ]);

            // Get the uploaded image file
            $imageFile = $request->file('image');
            
            // Convert image to base64
            $base64Image = base64_encode(file_get_contents($imageFile->getRealPath()));

            // Make API call to Roboflow
            $response = Http::withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded'
            ])->post('https://detect.roboflow.com/ecommerce-tq2iy/1', [
                'api_key' => 'EK7HzDFbodnGKylBuT9W'
            ], $base64Image);

            // Check if response is successful
            if ($response->successful()) {
                $predictions = $response->json('predictions', []);
                
                // Extract detected product classes
                $detectedClasses = collect($predictions)
                    ->pluck('class')
                    ->unique()
                    ->toArray();

                // Perform search based on detected classes
                $products = Product::whereIn('category', $detectedClasses)
                    ->orWhereIn('name', $detectedClasses)
                    ->get();

                return response()->json([
                    'predictions' => $predictions,
                    'products' => $products
                ]);
            }

            return response()->json(['error' => 'Unable to process image'], 400);

        } catch (\Exception $e) {
            Log::error('AI Search Error: ' . $e->getMessage());
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
