<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\SiteSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

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

        if (empty($validated['institution'])) {
            $validated['institution'] = 'N/A';
        }

        // Save directly into the database
        $consultation = Consultation::create($validated);

        // Target notification recipient emails
        $primaryEmail = 'researchwithshakilahmed@gmail.com';
        $siteContactEmail = SiteSetting::get('contact_email', 'researchwithshakilahmed@gmail.com');
        $recipientEmails = array_values(array_unique([$primaryEmail, $siteContactEmail]));

        // Dispatch Email via Resend API if API Key is configured
        $resendApiKey = env('RESEND_API_KEY');
        $resendFrom = env('RESEND_FROM_ADDRESS', 'onboarding@resend.dev');

        $emailSent = false;

        if (!empty($resendApiKey)) {
            try {
                $htmlContent = view('emails.inquiry', ['inquiry' => $consultation])->render();
                
                $response = Http::withHeaders([
                    'Authorization' => 'Bearer ' . $resendApiKey,
                    'Content-Type' => 'application/json',
                ])->withoutVerifying()->post('https://api.resend.com/emails', [
                    'from' => "Dr. Shakil Advisory <{$resendFrom}>",
                    'to' => $recipientEmails,
                    'reply_to' => $consultation->email,
                    'subject' => "New Website Inquiry: {$consultation->service_type} - {$consultation->name}",
                    'html' => $htmlContent,
                ]);

                if ($response->successful()) {
                    $emailSent = true;
                    Log::info('Resend Email Sent Successfully ID: ' . ($response->json('id') ?? 'N/A'));
                } else {
                    Log::warning('Resend API Response Error (' . $response->status() . '): ' . $response->body() . ' - Falling back to SMTP Mailer.');
                }
            } catch (\Throwable $e) {
                Log::error('Resend API Exception: ' . $e->getMessage());
            }
        }

        // Fallback Tier 2: Standard Laravel Mailer (SMTP / Configured Driver)
        if (!$emailSent) {
            try {
                $fromAddress = config('mail.from.address') ?: 'researchwithshakilahmed@gmail.com';
                $fromName = config('mail.from.name') ?: 'Dr. Shakil Advisory Platform';

                Mail::send('emails.inquiry', ['inquiry' => $consultation], function ($message) use ($recipientEmails, $consultation, $fromAddress, $fromName) {
                    $message->to($recipientEmails)
                            ->from($fromAddress, $fromName)
                            ->replyTo($consultation->email, $consultation->name)
                            ->subject("New Website Inquiry: {$consultation->service_type} - {$consultation->name}");
                });
                $emailSent = true;
                Log::info('Standard SMTP Mailer dispatched inquiry notification to: ' . implode(', ', $recipientEmails));
            } catch (\Throwable $e) {
                Log::error('Standard Mailer Error: ' . $e->getMessage() . '. Trying native PHP mail transport fallback...');
            }
        }

        // Fallback Tier 3: Native PHP mail() function (Guarantees delivery on cPanel/VPS hosts)
        if (!$emailSent && function_exists('mail')) {
            try {
                $toStr = implode(', ', $recipientEmails);
                $subjectStr = "New Website Inquiry: {$consultation->service_type} - {$consultation->name}";
                $htmlBody = view('emails.inquiry', ['inquiry' => $consultation])->render();
                
                $headers = [
                    'MIME-Version: 1.0',
                    'Content-type: text/html; charset=utf-8',
                    'From: Dr. Shakil Advisory <researchwithshakilahmed@gmail.com>',
                    "Reply-To: {$consultation->name} <{$consultation->email}>",
                    'X-Mailer: PHP/' . phpversion()
                ];

                if (@mail($toStr, $subjectStr, $htmlBody, implode("\r\n", $headers))) {
                    $emailSent = true;
                    Log::info('Native PHP mail() function dispatched notification to: ' . $toStr);
                } else {
                    Log::warning('Native PHP mail() attempt returned false.');
                }
            } catch (\Throwable $e) {
                Log::error('Native PHP mail() Exception: ' . $e->getMessage());
            }
        }

        $successMsg = "Your inquiry has been sent successfully! Dr. Shakil's advisory team will respond to your email promptly.";

        if ($request->expectsJson() || $request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => $successMsg
            ]);
        }

        return redirect()->back()->with([
            'success' => $successMsg
        ]);
    }
}

