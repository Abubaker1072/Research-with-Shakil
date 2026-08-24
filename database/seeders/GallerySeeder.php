<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        $photos = [
            [
                'title' => 'Hands-on Computer Lab Training Session',
                'caption' => 'Hands-on NVivo & SmartPLS software training in computer labs',
                'image_path' => 'images/hero_img_3.jpg',
                'category' => 'workshop',
                'page' => 'trainings',
                'sort_order' => 1,
            ],
            [
                'title' => 'CPD Executive Seminar & Faculty Auditorium',
                'caption' => 'ORIC capacity-building & research policy auditorium lecture',
                'image_path' => 'images/hero_img_4.jpg',
                'category' => 'seminar',
                'page' => 'trainings',
                'sort_order' => 2,
            ],
            [
                'title' => 'Research Mentorship Keynote Presentation',
                'caption' => 'Research Mentorship Keynote Presentation by Dr. Shakil',
                'image_path' => 'images/dr_shakil_presentation_quote.jpg',
                'category' => 'keynote',
                'page' => 'trainings',
                'sort_order' => 3,
            ],
            [
                'title' => 'Global Reach Symposium 2024',
                'caption' => 'Keynote speaker at Global Reach Symposium 2024',
                'image_path' => 'images/dr_shakil_symposium_speaker.jpg',
                'category' => 'symposium',
                'page' => 'trainings',
                'sort_order' => 4,
            ],
            [
                'title' => '1-on-1 Academic Advisory & Consultation',
                'caption' => 'PhD dissertation & Scopus journal defense 1-on-1 mentorship',
                'image_path' => 'images/hero_img_1.jpg',
                'category' => 'advisory',
                'page' => 'about',
                'sort_order' => 5,
            ],
            [
                'title' => 'University Keynote & Faculty Mentorship',
                'caption' => 'Teesside University & global academic partnerships',
                'image_path' => 'images/hero_img_2.jpg',
                'category' => 'keynote',
                'page' => 'about',
                'sort_order' => 6,
            ],
            [
                'title' => 'Hero Banner Portrait',
                'caption' => 'Dr. Muhammad Shakil Ahmad Senior Lecturer Teesside University',
                'image_path' => 'images/dr_shakil_hero.jpg',
                'category' => 'hero',
                'page' => 'home',
                'sort_order' => 7,
            ],
            [
                'title' => 'Profile Photo Cutout',
                'caption' => 'Dr. Muhammad Shakil Ahmad Profile Photo',
                'image_path' => 'images/hero_dr_shakil_cutout_v2.jpg',
                'category' => 'profile',
                'page' => 'all',
                'sort_order' => 8,
            ],
        ];

        foreach ($photos as $photo) {
            Gallery::updateOrCreate(['image_path' => $photo['image_path']], $photo);
        }
    }
}
