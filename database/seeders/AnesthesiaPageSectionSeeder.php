<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AnesthesiaPageSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // first create page (Anesthesia)
        $page = CategoryPage::create([
            'name'       => 'Divisions - Anesthesia',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            /*[
                'section_key'       => 'anesthesia_section_1',
                'page_name'         => 'anesthesia',
                'page_id'           => $page->id,
                'title'             => 'Anesthesia',
                'text'              => 'Divisions',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],*/
            [
                'section_key'       => 'anesthesia_section_1',
                'page_name'         => 'anesthesia',
                'page_id'           => $page->id,
                'title'             => 'General Anesthesia',
                'text'              => 'Laryngoscope Airway Management Endotracheal tubes (ETT) Laryngeal Mask Airways (LMA) Nasal cannulas Syringe IV catheters Intravenous (IV) administration sets Pulse oximeters Electrocardiogram (ECG) electrodes Blood pressure cuffs Surgical drapes Yankeur suction catheters Sterile gloves',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'anesthesia_section_2',
                'page_name'         => 'anesthesia',
                'page_id'           => $page->id,
                'title'             => 'Pain Therapy',
                'text'              => "Pain therapy is a branch of medicine that focuses on the diagnosis, treatment, and management of pain. Pain can be acute (short-term) or chronic (long-lasting), and it can be caused by a variety of factors, including injury, illness, and disease. Pain therapy can help to improve a person's quality of life by reducing pain intensity, improving function, and promoting emotional well-being.",
                'order'             => 2,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'anesthesia_section_3',
                'page_name'         => 'anesthesia',
                'page_id'           => $page->id,
                'title'             => 'Regional Anesthesia',
                'text'              => "Regional anesthesia is a type of pain management technique used during surgery or other procedures that numbs a specific part of your body. Unlike general anesthesia, which renders you unconscious, regional anesthesia allows you to stay awake or lightly sedated during the procedure.",
                'order'             => 3,
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
