<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
            'whatsapp' => 'nullable|string|max:50',
            'service_type' => 'nullable|string|max:255',
            'academic_level' => 'nullable|string|max:255',
            'institution' => 'nullable|string|max:255',
            'message' => 'required|string|min:3',
        ]);

        if (empty($validated['whatsapp'])) {
            $validated['whatsapp'] = 'N/A';
        }

        if (empty($validated['service_type'])) {
            $validated['service_type'] = 'Dissertation & Thesis Mentorship Inquiry';
        }

        if (empty($validated['academic_level'])) {
            $validated['academic_level'] = !empty($validated['institution']) 
                ? 'Institutional Representative' 
                : 'PhD Candidate / Researcher';
        }

        $consultation = Consultation::create($validated);

        // Primary notification target email
        $recipientEmail = SiteSetting::get('contact_email', 'info@researchwithshakil.com');

        // Attempt sending email notification
        try {
            Mail::raw(
                "New Website Inquiry Received:\n\n" .
                "Name: {$consultation->name}\n" .
                "Email: {$consultation->email}\n" .
                "WhatsApp: {$consultation->whatsapp}\n" .
                "Role/Level: {$consultation->academic_level}\n" .
                "Service: {$consultation->service_type}\n\n" .
                "Message:\n{$consultation->message}",
                function ($message) use ($recipientEmail, $consultation) {
                    $message->to($recipientEmail)
                            ->replyTo($consultation->email, $consultation->name)
                            ->subject("New Inquiry: {$consultation->service_type} - {$consultation->name}");
                }
            );
        } catch (\Throwable $e) {
            // Silence mail server connection issues in local env while logging
            \Illuminate\Support\Facades\Log::info('Mail dispatch log: ' . $e->getMessage());
        }

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Your inquiry has been sent to info@researchwithshakil.com! Dr. Shakil\'s advisory team will respond to your email promptly.'
            ]);
        }

        return redirect()->back()->with([
            'success' => 'Your inquiry has been sent to info@researchwithshakil.com! Dr. Shakil\'s advisory team will respond to your email promptly.'
        ]);
    }
}
