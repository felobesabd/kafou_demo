<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RespiratoryPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // First create page (Respiratory)
        $page = CategoryPage::create([
            'name'       => 'Divisions - Respiratory',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            [
                'section_key'       => 'respiratory_section_1',
                'page_name'         => 'respiratory',
                'page_id'           => $page->id,
                'title'             => 'Divisions - Respiratory',
                'text'              => 'Explore our comprehensive respiratory therapy solutions',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'respiratory_section_2',
                'page_name'         => 'respiratory',
                'page_id'           => $page->id,
                'title'             => 'Respiratory',
                'text'              => '<p>Respiratory therapy is a healthcare field specializing in the diagnosis, treatment, and management of conditions affecting the lungs and breathing. Respiratory therapists (RTs) work collaboratively with doctors and other healthcare professionals to help patients of all ages, from premature infants to elderly individuals with chronic lung diseases.</p>',
                'order'             => 2,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
        ];

        foreach ($sections as $item) {
            Section::create([
                'section_key'       => $item['section_key'],
                'page_name'         => $item['page_name'],
                'page_id'           => $item['page_id'],
                'title'             => $item['title'],
                'text'              => $item['text'],
                'order'             => $item['order'],
                'is_deleted'        => $item['is_deleted'],
                'showing_user'      => $item['showing_user'],
                'showing_admin'     => $item['showing_admin'],
            ]);
        }
    }
}
