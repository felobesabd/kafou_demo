<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class IVFPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // First create page (IVF)
        $page = CategoryPage::create([
            'name'       => 'Divisions - Lab Solutions',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            // 1. Welcome Video Section
            [
                'section_key'       => 'lab_solutions_section_1',
                'page_name'         => 'lab solutions',
                'page_id'           => $page->id,
                'title'             => 'Divisions - LAB Solutions',
                'text'              => 'Explore our comprehensive IVF solutions and services',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 2. IVF Lab Equipment and Disposables
            [
                'section_key'       => 'lab_solutions_section_2',
                'page_name'         => 'lab solutions',
                'page_id'           => $page->id,
                'title'             => 'IVF Lab Equipment and Disposables',
                'text'              => 'Kafou Medical is a top player in the Fertility and IVF market in the Kingdom of Saudi Arabia, providing a wide array of IVF products and solutions. The range of our services covers everything from IVF project planning and design to providing equipment and training for turnkey projects.',
                'order'             => 2,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 3. IVF Turnkey Projects
            [
                'section_key'       => 'lab_solutions_section_3',
                'page_name'         => 'lab solutions',
                'page_id'           => $page->id,
                'title'             => 'IVF Turnkey Projects',
                'text'              => 'Kafou Medical team has a remarkable experience in setting up systems in the facilities of prestigious hospitals and clinics of both the governmental and private sector taking up the complete setting up of the department as a turnkey project.',
                'order'             => 3,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 4. After Sales Services
            [
                'section_key'       => 'lab_solutions_section_4',
                'page_name'         => 'lab solutions',
                'page_id'           => $page->id,
                'title'             => 'After Sales Services',
                'text'              => 'Kafou Medical has a team of trained Engineers to provide quality installation, maintenance, service and training locally in the Kingdom of Saudi Arabia. We address all customer requirements with utmost care and resolve them as quickly as possible.',
                'order'             => 4,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 5. LAB Solutions Consumables
            [
                'section_key'       => 'lab_solutions_section_5',
                'page_name'         => 'lab solutions',
                'page_id'           => $page->id,
                'title'             => 'LAB Solutions Consumables',
                'text'              => 'With its variety of IVF trusted brands consumables and wide range of available stock, Kafou Medical has been one of the healthcare facilities preferred partners providing adequate and timely healthcare support.',
                'order'             => 5,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 6. LAB Solutions Genetics
            [
                'section_key'       => 'lab_solutions_section_6',
                'page_name'         => 'lab solutions',
                'page_id'           => $page->id,
                'title'             => 'LAB Solutions Genetics',
                'text'              => 'Kafou Medical is a major player in the Genetics Laboratories market in the Kingdom of Saudi Arabia providing a wide range of top brands Labs products and solutions.',
                'order'             => 6,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ]
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
