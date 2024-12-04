<?php
// app/Http/Controllers/AISearchController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AISearchController extends Controller
{
    public function search(Request $request)
    {
        try {
            // Validate image input
            $base64Image = $request->input('image');
            
            // Log image details for debugging
            \Log::info('Received Image Details', [
                'image_length' => strlen($base64Image),
                'image_first_20_chars' => substr($base64Image, 0, 20)
            ]);

            $response = Http::withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded',
            ])->post("https://detect.roboflow.com/ecommerce-tq2iy/1?api_key=EK7HzDFbodnGKylBuT9W&image=$base64Image");
            
            
            
            

            return response()->json($response->json());

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}