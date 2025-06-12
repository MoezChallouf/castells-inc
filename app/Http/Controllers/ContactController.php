<?php

namespace App\Http\Controllers;

use App\Models\ContactRequest;
use App\Models\Recrutement;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'subject' => 'required|string',
        'message' => 'required|string',
        'attachments.*' => 'file|max:2048|mimes:jpg,jpeg,png,pdf',
    ]);

    $attachments = [];
    if ($request->hasFile('attachments')) {
        foreach ($request->file('attachments') as $file) {
            $attachments[] = $file->store('uploads/attachments', 'public');
        }
    }

    ContactRequest::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'subject' => $validated['subject'],
        'message' => $validated['message'],
        'attachments' => json_encode($attachments),
    ]);

    return response()->json(['success' => true, 'message' => 'Message sent successfully.']);
}


}
