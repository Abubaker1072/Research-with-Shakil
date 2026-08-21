<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function inquiries()
    {
        $inquiries = Consultation::orderBy('created_at', 'desc')->get();
        return view('pages.admin.inquiries', compact('inquiries'));
    }

    public function updateStatus(Request $request, $id)
    {
        $consultation = Consultation::findOrFail($id);
        $consultation->update(['status' => $request->status]);

        return redirect()->back()->with('success', 'Inquiry status updated successfully.');
    }
}
