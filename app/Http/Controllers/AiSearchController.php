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
            $response = Http::withHeaders([
                'Content-Type' => 'application/x-www-form-urlencoded'
            ])->post('https://detect.roboflow.com/ecommerce-tq2iy/1', [
                'api_key' => env('ROBOFLOW_API_KEY'),
                'image' => $request->input('image')
            ]);

            return response()->json($response->json());
        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage()
            ], 500);
        }
    }
}