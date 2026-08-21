<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'whatsapp' => 'required|string|max:50',
            'service_type' => 'required|string|max:255',
            'academic_level' => 'required|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        $consultation = Consultation::create($validated);

        // Build pre-filled WhatsApp link
        $phone = '923000000000'; // Default WhatsApp contact
        $text = "Hello Dr. Shakil Ahmad, I submitted a consultation request via your website.\n\n" .
                "Name: {$consultation->name}\n" .
                "Service Requested: {$consultation->service_type}\n" .
                "Academic Level: {$consultation->academic_level}\n" .
                "Message: " . substr($consultation->message, 0, 100) . "...";

        $whatsappUrl = "https://wa.me/{$phone}?text=" . urlencode($text);

        return redirect()->back()->with([
            'success' => 'Your consultation request has been submitted successfully! Dr. Shakil\'s team will reach out to you shortly.',
            'whatsapp_url' => $whatsappUrl,
        ]);
    }
}
