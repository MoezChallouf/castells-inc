<?php

namespace App\Http\Controllers;

use App\Models\Recrutement;
use Illuminate\Http\Request;

class RecrutementController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|string',
            'message' => 'nullable|string',
            'cv' => 'required|file|mimes:pdf,doc,docx|max:5120',
        ]);

        $cvPath = $request->file('cv')->store('cvs', 'public');

        Recrutement::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'message' => $validated['message'] ?? null,
            'cv_path' => $cvPath,
        ]);

        return response()->json(['success' => true, 'message' => 'Candidature envoyée avec succès.']);
    }
}
