@extends('layouts.app')

@section('title', 'Admin Consultation Inquiries | Research with Shakil')

@section('content')

<!-- Header Banner -->
<section style="padding: 8rem 0 3rem 0; background: var(--gradient-hero);">
    <div class="container text-center">
        <div class="hero-badge">
            <i class="fas fa-user-shield"></i> Internal Management Dashboard
        </div>
        <h1 class="hero-title">Consultation <span class="gradient-text">Inquiries</span></h1>
    </div>
</section>

<section class="section-padding" style="background: var(--bg-main);">
    <div class="container">
        <div class="hero-profile-card">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
                <h3 style="font-size: 1.4rem;">Recorded Student & Client Inquiries ({{ count($inquiries) }})</h3>
            </div>

            @if($inquiries->isEmpty())
                <p style="color: var(--text-secondary); text-align: center; padding: 2rem;">No consultation requests received yet.</p>
            @else
                <div style="overflow-x: auto;">
                    <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 0.9rem;">
                        <thead>
                            <tr style="border-bottom: 2px solid var(--border-glass); color: var(--accent-emerald);">
                                <th style="padding: 1rem;">Date</th>
                                <th style="padding: 1rem;">Name</th>
                                <th style="padding: 1rem;">Contact</th>
                                <th style="padding: 1rem;">Service Requested</th>
                                <th style="padding: 1rem;">Level</th>
                                <th style="padding: 1rem;">Message</th>
                                <th style="padding: 1rem;">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inquiries as $inquiry)
                            <tr style="border-bottom: 1px solid var(--border-glass);">
                                <td style="padding: 1rem; color: var(--text-muted);">{{ $inquiry->created_at->format('M d, Y') }}</td>
                                <td style="padding: 1rem; font-weight: 600;">{{ $inquiry->name }}</td>
                                <td style="padding: 1rem;">
                                    <div>{{ $inquiry->email }}</div>
                                    <a href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $inquiry->whatsapp) }}" target="_blank" style="color: #25d366;">
                                        <i class="fab fa-whatsapp"></i> {{ $inquiry->whatsapp }}
                                    </a>
                                </td>
                                <td style="padding: 1rem; color: var(--accent-amber);">{{ $inquiry->service_type }}</td>
                                <td style="padding: 1rem;">{{ $inquiry->academic_level }}</td>
                                <td style="padding: 1rem; max-width: 250px; color: var(--text-secondary);">{{ Str::limit($inquiry->message, 80) }}</td>
                                <td style="padding: 1rem;">
                                    <form action="{{ route('admin.inquiries.status', $inquiry->id) }}" method="POST">
                                        @csrf
                                        <select name="status" onchange="this.form.submit()" class="form-control" style="padding: 0.3rem 0.6rem; font-size: 0.8rem; width: auto;">
                                            <option value="pending" {{ $inquiry->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="contacted" {{ $inquiry->status == 'contacted' ? 'selected' : '' }}>Contacted</option>
                                            <option value="completed" {{ $inquiry->status == 'completed' ? 'selected' : '' }}>Completed</option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</section>

@endsection
