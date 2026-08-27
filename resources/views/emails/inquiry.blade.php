<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Website Inquiry</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; background-color: #f8fafc; margin: 0; padding: 20px; color: #334155;">
    <div style="max-width: 600px; margin: 0 auto; background: #ffffff; border-radius: 12px; overflow: hidden; border: 1px solid #e2e8f0; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
        
        <!-- Header -->
        <div style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); padding: 25px 30px; text-align: center; color: #ffffff;">
            <div style="display: inline-block; background: rgba(234, 179, 8, 0.2); border: 1px solid #eab308; color: #fef08a; font-size: 11px; font-weight: 800; padding: 4px 12px; border-radius: 20px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
                ACADEMIC & ADVISORY INQUIRY
            </div>
            <h2 style="margin: 0; font-size: 22px; font-weight: 800; color: #ffffff;">New Website Submission</h2>
            <p style="margin: 5px 0 0 0; font-size: 13px; color: #cbd5e1;">Received on {{ $inquiry->created_at ? $inquiry->created_at->format('F d, Y \a\t h:i A') : date('F d, Y \a\t h:i A') }}</p>
        </div>

        <!-- Content Body -->
        <div style="padding: 30px;">
            <p style="font-size: 15px; color: #0f172a; margin-top: 0;"><strong>Hello Dr. Shakil Ahmad,</strong></p>
            <p style="font-size: 14px; color: #475569; line-height: 1.6;">You have received a new inquiry submission from your website. Details are provided below:</p>

            <!-- Data Table -->
            <table style="width: 100%; border-collapse: collapse; margin: 20px 0; font-size: 14px;">
                <tr>
                    <td style="padding: 10px 12px; background: #f1f5f9; font-weight: 700; color: #0f172a; width: 35%; border-bottom: 1px solid #e2e8f0;">Full Name:</td>
                    <td style="padding: 10px 12px; background: #ffffff; color: #0f172a; border-bottom: 1px solid #e2e8f0; font-weight: 600;">{{ $inquiry->name }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; background: #f1f5f9; font-weight: 700; color: #0f172a; border-bottom: 1px solid #e2e8f0;">Email Address:</td>
                    <td style="padding: 10px 12px; background: #ffffff; color: #0284c7; border-bottom: 1px solid #e2e8f0; font-weight: 600;">
                        <a href="mailto:{{ $inquiry->email }}" style="color: #0284c7; text-decoration: underline;">{{ $inquiry->email }}</a>
                    </td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; background: #f1f5f9; font-weight: 700; color: #0f172a; border-bottom: 1px solid #e2e8f0;">WhatsApp / Phone:</td>
                    <td style="padding: 10px 12px; background: #ffffff; color: #0f172a; border-bottom: 1px solid #e2e8f0;">{{ $inquiry->whatsapp ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; background: #f1f5f9; font-weight: 700; color: #0f172a; border-bottom: 1px solid #e2e8f0;">Role / Category:</td>
                    <td style="padding: 10px 12px; background: #ffffff; color: #0f172a; border-bottom: 1px solid #e2e8f0;">{{ $inquiry->academic_level ?? 'N/A' }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 12px; background: #f1f5f9; font-weight: 700; color: #0f172a; border-bottom: 1px solid #e2e8f0;">Service Requested:</td>
                    <td style="padding: 10px 12px; background: #ffffff; color: #0f172a; border-bottom: 1px solid #e2e8f0; font-weight: 600;">{{ $inquiry->service_type ?? 'General Inquiry' }}</td>
                </tr>
                @if(!empty($inquiry->institution) && $inquiry->institution !== 'N/A')
                <tr>
                    <td style="padding: 10px 12px; background: #f1f5f9; font-weight: 700; color: #0f172a; border-bottom: 1px solid #e2e8f0;">Institution / Univ:</td>
                    <td style="padding: 10px 12px; background: #ffffff; color: #0f172a; border-bottom: 1px solid #e2e8f0;">{{ $inquiry->institution }}</td>
                </tr>
                @endif
            </table>

            <!-- Message Card -->
            <div style="background: #f8fafc; border-left: 4px solid #0284c7; padding: 15px; border-radius: 6px; margin-bottom: 25px;">
                <div style="font-size: 12px; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 6px;">Message / Project Overview:</div>
                <div style="font-size: 14px; color: #334155; line-height: 1.6; white-space: pre-wrap;">{{ $inquiry->message }}</div>
            </div>

            <!-- Action Button -->
            <div style="text-align: center; margin-top: 25px;">
                <a href="mailto:{{ $inquiry->email }}?subject=Re:%20Inquiry%20regarding%20{{ urlencode($inquiry->service_type ?? 'Academic Advisory') }}" style="display: inline-block; background: #0f172a; color: #ffffff; text-decoration: none; padding: 12px 28px; border-radius: 8px; font-weight: 700; font-size: 14px;">
                    Reply to {{ $inquiry->name }} &rarr;
                </a>
            </div>
        </div>

        <!-- Footer -->
        <div style="background: #f1f5f9; padding: 15px 30px; text-align: center; font-size: 12px; color: #64748b; border-top: 1px solid #e2e8f0;">
            This email was automatically generated by your website inquiry system.<br>
            Dr. Muhammad Shakil Ahmad Research & Advisory Platform
        </div>
    </div>
</body>
</html>
