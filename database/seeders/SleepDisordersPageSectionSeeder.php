<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SleepDisordersPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Create the Sleep Disorders page
        $page = CategoryPage::create([
            'name'       => 'Divisions - Sleep Disorders',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            [
                'section_key'       => 'sleep_disorders_section_1',
                'page_name'         => 'sleep_disorders',
                'page_id'           => $page->id,
                'title'             => 'Divisions - Sleep Disorders',
                'text'              => 'Comprehensive solutions for sleep disorder diagnosis and treatment',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'sleep_disorders_section_2',
                'page_name'         => 'sleep_disorders',
                'page_id'           => $page->id,
                'title'             => 'Sleep Disorders',
                'text'              => '<p>Sleep disorders are conditions that disrupt your normal sleep patterns in a way that interferes with your daytime functioning. There are over 80 different types of sleep disorders.</p>',
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
