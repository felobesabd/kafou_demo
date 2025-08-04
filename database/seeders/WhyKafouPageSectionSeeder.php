<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WhyKafouPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // first create page (why_kafou)
        $page = CategoryPage::create([
            'name'       => 'Why Kafou',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            [
                'section_key'       => 'why_kafou_section_1',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'Why Kafou Medical?',
                'text'              => 'Kafou Medical is very committed in fair business practices and we are fully aware of the importance that behaving fairly will reflect on our partners’ reputation.',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_2',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'Our Expertise in Your Hands',
                'text'              => "Innovative products such as yours require the collaboration of an experienced partner who knows how to deal with Technical Specifications and International Standards. Knowing the client's standards and requirements is something you can only learn with direct experience in the field. We can provide you the know-how in the market for the most highly demanding clients of the Kingdom.",
                'order'             => 2,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_3',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'TERRITORIES ACCESS',
                'text'              => "Wouldn't it be nice to have immediate access to clients all over Saudi Arabia? You can have direct access to our offices located in the three main regions of Saudi Arabia (East: Al-Khobar, Central: Riyadh, West: Jeddah)",
                'order'             => 3,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_4',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'MARKET ANALYSIS',
                'text'              => "Imagine the benefits of introducing your products in a country with years of market knowledge in hands? We can support your business by introducing you directly to the correct channels and the decision makers. Furthermore, we can provide you insights of the market strategies for the upcoming years and what to target in the short term as your possible potentials.",
                'order'             => 4,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_5',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'LOCALIZATION',
                'text'              => "Sometimes reaching your goals is possible only through localization or enhancing the local content which might require a consistent investment in time and in infrastructure. Kafou Medical can provide you the necessary requirements you need in order to achieve your goals faster.",
                'order'             => 5,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_6',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'SFDA REGISTRATION',
                'text'              => "According to the Saudi FDA regulations, overseas medical manufacturers must appoint a local Authorized Representative. The Authorized Representative will act as a communication channel between the manufacturer and the Saudi FDA.
                                        Kafou Medical deals directly with Regulatory Consultants to overseas medical manufacturers to grant the Saudi FDA approvals for their products.
                                        Medical & Non-Medical Devices/IVDs licenses include but not limited to:
                                        Medical Device National Registry “MDNR”.
                                        Medical Device Establishment License “MDEL”.
                                        Medical Device Marketing Authorization “MDMA”.
                                        Medical Device Importing License “MDIL”.
                                        National Center for Medical Devices Reporting “NCMDR”.
                                        Product Classification System “PCS”.",
                'order'             => 6,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_7',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'REDUCE LEAD TIME',
                'text'              => "Delivery time is a deal breaker in GCC, we believe Kafou Medical can build smart inventory to reduce delivery time to the minimum.",
                'order'             => 7,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_8',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'RELIABILITY',
                'text'              => "With our multinational business partners of different sizes, we know how important it is to have excellent communication capabilities and the flexibility to adapt rapidly to our partners requirements.
                                        Understanding what business strategy and vision our partner has is a crucial element for being successful in the briefest time possible.",
                'order'             => 8,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_9',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'INTELLECTUAL PROPERTY',
                'text'              => "Working hard in R&D to finally innovate a product isn’t a simple operation. It requires perseveration and an uncountable amount of time.
                                        For this reason, we perfectly understand how important Intellectual Property, Patents and Brands are for you.
                                        If we are looking for a partner who knows how to deal with NDAs and respect the principal’s rights, then you will not be disappointed with us.",
                'order'             => 9,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'why_kafou_section_10',
                'page_name'         => 'why kafou',
                'page_id'           => $page->id,
                'title'             => 'LAWS & REGULATIONS',
                'text'              => "Entering a new country comes with a burden which is the understanding of a new range of Rules and Regulations which you are not used to.
                                        Kafou Group has established and operated seven different type of businesses in Saudi Arabia ranging from Food Supply to Medical Equipment and have grown a considerable experience in these matters.",
                'order'             => 10,
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
