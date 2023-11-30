<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'media' => 'required|file|mimes:jpeg,png,jpg,gif,svg,mp4|max:20480', // Adjust max size as needed
            'description' => 'nullable|string|max:255',
        ]);

        // Process the uploaded file
        $mediaPath = $request->file('media')->store('media', 'public');

        // Store other data if needed (e.g., description)
        $description = $request->input('description');

        // Pass the $mediaPath variable to the view
        return view('upload', ['mediaPath' => asset('storage/' . $mediaPath), 'description' => $description]);
    }

    public function index()
    {
        return view('upload');
    }
}