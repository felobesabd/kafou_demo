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
                'section_key' => 'welcome_kafou',
                'title' => 'Welcome to Kafou Medical',
                'text' => 'Empowering Global Healthcare in the GCC. We connect leading medical brands with the region’s most trusted providers.',
                'button' => 'Mission & Vision',
                'order' => 1,
            ],
            [
                'section_key' => 'why_kafou',
                'title' => 'Why Kafou Medical?',
                'text' => '',
                'button' => 'Read More',
                'order' => 2,
            ],
            [
                'section_key' => 'division_anesthesia',
                'title' => 'Anesthesia',
                'text' => 'Divisions',
                'button' => 'Read More',
                'order' => 3,
            ],
            [
                'section_key' => 'division_surgery',
                'title' => 'Surgery',
                'text' => 'Divisions',
                'button' => 'Read More',
                'order' => 4,
            ],
            [
                'section_key' => 'division_lab_solutions',
                'title' => 'LAB Solutions',
                'text' => 'Divisions',
                'button' => 'Read More',
                'order' => 5,
            ],
            [
                'section_key' => 'division_respiratory',
                'title' => 'Respiratory',
                'text' => 'Divisions',
                'button' => 'Read More',
                'order' => 6,
            ],
            [
                'section_key' => 'division_sleep_disorders',
                'title' => 'Sleep Disorders',
                'text' => 'Divisions',
                'button' => 'Read More',
                'order' => 7,
            ],
            [
                'section_key' => 'division_nursing_icu',
                'title' => 'Nursing & ICU',
                'text' => 'Divisions',
                'button' => 'Read More',
                'order' => 8,
            ],
            /*[
                'section_key' => 'stats',
                'title' => 'Our Achievements',
                'text' => 'HAPPY CLIENTS, SUCCESSFULLY FULFILLED ORDERS, OFFICES IN KSA, WAREHOUSES',
                'button' => null,
                'order' => 8,
            ],*/
            /*[
                'section_key' => 'our_partners',
                'title' => 'Our Partners',
                'text' => null,
                'button' => 'View More',
                'order' => 10,
            ],
            [
                'section_key' => 'our_clients',
                'title' => 'Our Clients',
                'text' => null,
                'button' => 'View More',
                'order' => 11,
            ],*/
            [
                'section_key' => 'ethics_compliance',
                'title' => 'Ethics & Compliance',
                'text' => 'Kafou Medical is very committed in fair business practices and we are fully aware of the importance that behaving fairly will reflect on our partners’ reputation.',
                'button' => 'Read More',
                'order' => 9,
            ],
        ];

        foreach ($sections as $item) {
            Section::create([
                'section_key' => $item['section_key'],
                'title'       => $item['title'],
                'text'        => $item['text'],
                'button'      => $item['button'],
                'order'       => $item['order'],
            ]);
        }
    }
}
