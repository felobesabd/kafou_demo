<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EthicsPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // Create the Nursing & ICU page
        $page = CategoryPage::create([
            'name'       => 'Ethics And Compliance',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            [
                'section_key'       => 'ethics_section_1',
                'page_name'         => 'ethics and compliance',
                'page_id'           => $page->id,
                'title'             => 'Ethics & Compliance',
                'text'              => '<p>Kafou Medical is very committed in fair business practices and we are fully aware of the importance that behaving fairly will reflect on our partners’ reputation. Kafou Medical is strongly committed in monitoring all activities in the market in order to secure that no bribery or similar misconduct could be part of the business. Besides that pure compliance, Kafou Medical is also following best practices in order to not infringe any anti-trust international laws. For that reason, full transparency in commercial activities and not disclosure of any confidential info, it is part of our commitment with all international companies we are working with.</p>',
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
