<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HomePageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                'section_key'       => 'section_1',
                'title'             => 'Welcome to Kafou Medical',
                'text'              => 'Empowering Global Healthcare in the GCC. We connect leading medical brands with the region’s most trusted providers.',
                'button'            => 'Mission & Vision',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_2',
                'title'             => 'Why Kafou Medical?',
                'text'              => '',
                'button'            => 'Read More',
                'order'             => 2,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_3',
                'title'             => 'Anesthesia',
                'text'              => 'Divisions',
                'button'            => 'Read More',
                'order'             => 3,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_4',
                'title'             => 'Surgery',
                'text'              => 'Divisions',
                'button'            => 'Read More',
                'order'             => 4,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_5',
                'title'             => 'LAB Solutions',
                'text'              => 'Divisions',
                'button'            => 'Read More',
                'order'             => 5,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_6',
                'title'             => 'Respiratory',
                'text'              => 'Divisions',
                'button'            => 'Read More',
                'order'             => 6,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_7',
                'title'             => 'Sleep Disorders',
                'text'              => 'Divisions',
                'button'            => 'Read More',
                'order'             => 7,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_8',
                'title'             => 'Nursing & ICU',
                'text'              => 'Divisions',
                'button'            => 'Read More',
                'order'             => 8,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_9',
                'title'             => 'Our Achievements',
                'text'              => 'HAPPY CLIENTS, SUCCESSFULLY FULFILLED ORDERS, OFFICES IN KSA, WAREHOUSES',
                'button'            => '',
                'order'             => 9,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 0,
            ],
            [
                'section_key'       => 'section_10',
                'title'             => 'Our Partners',
                'text'              => '',
                'button'            => 'View More',
                'order'             => 10,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 0,
            ],
            [
                'section_key'       => 'section_11',
                'title'             => 'Our Clients',
                'text'              => '',
                'button'            => 'View More',
                'order'             => 11,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 0,
            ],
            [
                'section_key'       => 'section_12',
                'title'             => 'Ethics & Compliance',
                'text'              => 'Kafou Medical is very committed in fair business practices and we are fully aware of the importance that behaving fairly will reflect on our partners’ reputation.',
                'button'            => 'Read More',
                'order'             => 12,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'section_13',
                'title'             => 'Careers',
                'text'              => 'Direct Apply',
                'button'            => 'Job Openings',
                'order'             => 13,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 0,
            ],
        ];

        foreach ($sections as $item) {
            Section::create([
                'section_key'       => $item['section_key'],
                'title'             => $item['title'],
                'text'              => $item['text'],
                'button'            => $item['button'],
                'order'             => $item['order'],
                'is_deleted'        => $item['is_deleted'],
                'showing_user'      => $item['showing_user'],
                'showing_admin'     => $item['showing_admin'],
            ]);
        }
    }
}
