<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        $settings = [
            ['key' => 'site_title', 'value' => 'Dr. Muhammad Shakil Ahmad', 'group' => 'general', 'type' => 'string'],
            ['key' => 'hero_name', 'value' => 'Dr. Muhammad Shakil Ahmad', 'group' => 'hero', 'type' => 'string'],
            ['key' => 'hero_headline', 'value' => 'Master High-Impact Research & Academic Publishing', 'group' => 'hero', 'type' => 'string'],
            ['key' => 'hero_subtitle', 'value' => 'Senior Lecturer at Teesside University (UK) & Management Researcher', 'group' => 'hero', 'type' => 'string'],
            ['key' => 'hero_tagline', 'value' => 'Structured step-by-step masterclasses, 1-on-1 dissertation coaching, and quantitative/qualitative methodologies for global researchers.', 'group' => 'hero', 'type' => 'string'],
            ['key' => 'home_bio_image', 'value' => 'images/dr_shakil_presentation_quote.jpg', 'group' => 'home', 'type' => 'string'],
            ['key' => 'home_quote_image', 'value' => 'images/dr_shakil_impact_factor_presentation.jpg', 'group' => 'home', 'type' => 'string'],
            ['key' => 'stat_learners', 'value' => '16,000+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'stat_reviews', 'value' => '1,800+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'stat_workshops', 'value' => '50+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'stat_scholars_trained', 'value' => '12,000+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'stat_h_index', 'value' => '39', 'group' => 'stats', 'type' => 'number'],
            ['key' => 'stat_ssci_papers', 'value' => '90+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'contact_email', 'value' => 'info@researchwithshakil.com', 'group' => 'contact', 'type' => 'string'],
            ['key' => 'whatsapp_number', 'value' => '+92 300 0000000', 'group' => 'contact', 'type' => 'string'],
            ['key' => 'google_scholar_url', 'value' => 'https://scholar.google.com/citations?user=Kr6MOa0AAAAJ&hl=en&oi=ao', 'group' => 'social', 'type' => 'string'],
            ['key' => 'udemy_profile_url', 'value' => 'https://www.udemy.com/user/dr-muhammad-shakil-ahmad/', 'group' => 'social', 'type' => 'string'],
            ['key' => 'linkedin_url', 'value' => 'https://linkedin.com', 'group' => 'social', 'type' => 'string'],
            ['key' => 'twitter_url', 'value' => 'https://twitter.com', 'group' => 'social', 'type' => 'string'],
            ['key' => 'footer_about_text', 'value' => 'Research Methodology & Academic Advisory', 'group' => 'footer', 'type' => 'string'],
            ['key' => 'footer_copyright', 'value' => 'Research with Shakil | All rights reserved', 'group' => 'footer', 'type' => 'string'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::set($setting['key'], $setting['value'], $setting['group'], $setting['type']);
        }
    }
}
