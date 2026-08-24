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
            ['key' => 'hero_subtitle', 'value' => 'Senior Lecturer at Teesside University (UK) & Management Researcher', 'group' => 'hero', 'type' => 'string'],
            ['key' => 'home_bio_image', 'value' => 'images/dr_shakil_presentation_quote.jpg', 'group' => 'home', 'type' => 'string'],
            ['key' => 'stat_learners', 'value' => '16000', 'group' => 'stats', 'type' => 'number'],
            ['key' => 'stat_reviews', 'value' => '1800', 'group' => 'stats', 'type' => 'number'],
            ['key' => 'stat_workshops', 'value' => '50+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'stat_scholars_trained', 'value' => '12000+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'stat_h_index', 'value' => '39', 'group' => 'stats', 'type' => 'number'],
            ['key' => 'stat_ssci_papers', 'value' => '90+', 'group' => 'stats', 'type' => 'string'],
            ['key' => 'contact_email', 'value' => 'contact@researchwithshakil.com', 'group' => 'contact', 'type' => 'string'],
            ['key' => 'whatsapp_number', 'value' => '+92 300 0000000', 'group' => 'contact', 'type' => 'string'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::set($setting['key'], $setting['value'], $setting['group'], $setting['type']);
        }
    }
}
