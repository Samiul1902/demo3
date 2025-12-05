<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http; // Required for API calls

class ServiceController extends Controller
{
    // 1. List all services
    public function index() {
        $services = Service::all();
        return view('admin.services.index', compact('services'));
    }

    // 2. Show Create Form
    public function create() {
        return view('admin.services.create');
    }

    // 3. Store new service
    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'duration' => 'required|integer'
        ]);

        $imageUrl = null;

        // --- START "Nano Banana" (Gemini 2.5 Flash Image) Logic ---
        // If no image is uploaded, we generate one using AI
        if (!$request->hasFile('image')) {
            try {
                // This is a placeholder for the actual API call
                // Prompt: "High quality, professional salon photo of " + $request->name

                // For now, during planning/dev without a live key, we use a generated placeholder 
                // that represents where the AI image would go.
                $imageUrl = "[https://placehold.co/600x400?text=AI+Generated](https://placehold.co/600x400?text=AI+Generated):+" . urlencode($request->name);

            } catch (\Exception $e) {
                // Fallback if AI fails
                $imageUrl = "[https://placehold.co/600x400?text=](https://placehold.co/600x400?text=)" . urlencode($request->name);
            }
        }
        // --- END AI Logic ---

        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'duration_minutes' => $request->duration,
            'image_url' => $imageUrl
        ]);

        return redirect()->route('admin.services.index')->with('success', 'Service added (AI Image Generated)!');
    }
}
