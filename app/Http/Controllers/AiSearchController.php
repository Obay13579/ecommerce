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
            // Validate the input (image URL or uploaded file)
            $imageUrl = $request->input('image_url');
            $imageFile = $request->file('image');

            if (!$imageUrl && !$imageFile) {
                return response()->json(['error' => 'Image URL or file is required'], 400);
            }

            // Use image URL if provided
            if ($imageUrl) {
                $image = $imageUrl;
            } else {
                // Handle file upload and get the image path
                $image = $imageFile->getRealPath();
            }

            // API Key and Endpoint
            $apiKey = env('ROBOFLOW_API_KEY'); // Add your key in .env
            $modelId = env('ROBOFLOW_ENDPOINT'); // Replace with your model details
            $apiUrl = "$modelId?api_key=$apiKey";

            // Make an HTTP POST request to the Roboflow API
            $response = Http::attach(
                'file', file_get_contents($image), basename($image)
            )->post($apiUrl);

            // Handle errors
            if ($response->failed()) {
                return response()->json([
                    'error' => 'Roboflow API request failed',
                    'details' => $response->body(),
                ], $response->status());
            }

            // Return predictions from the Roboflow API
            return response()->json($response->json());

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}
