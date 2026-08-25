<?php

namespace Database\Seeders;

use App\Models\Consultation;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    public function run(): void
    {
        Consultation::truncate();

        $inquiries = [
            [
                'name' => 'Dr. Ali Raza',
                'email' => 'ali.raza@nust.edu.pk',
                'whatsapp' => '+923001234567',
                'service_type' => 'Dissertation & Thesis Coaching',
                'academic_level' => 'PhD Candidate',
                'institution' => 'NUST Islamabad',
                'message' => 'Looking for advisory on research methodology design and thesis writing defense.',
                'status' => 'pending',
            ],
            [
                'name' => 'Prof. Sarah Jenkins',
                'email' => 's.jenkins@teesside.ac.uk',
                'whatsapp' => '+447911123456',
                'service_type' => 'Systematic Literature Review & Meta-Analysis Consulting',
                'academic_level' => 'University Faculty',
                'institution' => 'Teesside University',
                'message' => 'Requesting consultation on PRISMA 2020 systematic review matrix for a Q1 journal submission.',
                'status' => 'contacted',
            ],
            [
                'name' => 'Usman Tariq',
                'email' => 'usman.tariq@gmail.com',
                'whatsapp' => '+923219876543',
                'service_type' => 'Grant Writing & Research Advisory',
                'academic_level' => 'Master\'s Researcher',
                'institution' => 'COMSATS University',
                'message' => 'Interested in HEC NRPU grant proposal writing and project budget architecture.',
                'status' => 'completed',
            ],
        ];

        foreach ($inquiries as $inquiry) {
            Consultation::create($inquiry);
        }
    }
}
