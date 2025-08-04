<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class NursingIcuPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Create the Nursing & ICU page
        $page = CategoryPage::create([
            'name'       => 'Divisions - Nursing & ICU',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            /*[
                'section_key'       => 'nursing_icu_section_1',
                'page_name'         => 'nursing_icu',
                'page_id'           => $page->id,
                'title'             => 'Divisions - Nursing & ICU',
                'text'              => 'Comprehensive critical care solutions for your healthcare facility',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],*/
            [
                'section_key'       => 'nursing_icu_section_1',
                'page_name'         => 'nursing_icu',
                'page_id'           => $page->id,
                'title'             => 'Nursing & ICU',
                'text'              => '<p>Intensive care units (ICUs) are specially equipped hospital units that provide intensive care to critically ill patients</p>',
                'order'             => 1,
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
