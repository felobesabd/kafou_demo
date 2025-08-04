<?php

namespace Database\Seeders;

use App\Models\CategoryPage;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SurgeryPageSectionSeeder extends Seeder
{
    public function run(): void
    {
        // First create page (Surgery)
        $page = CategoryPage::create([
            'name'       => 'Divisions - Surgery',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        $sections = [
            /*[
                'section_key'       => 'surgery_section_1',
                'page_name'         => 'Divisions - Surgery',
                'page_id'           => $page->id,
                'title'             => 'Surgery',
                'text'              => 'Explore our comprehensive range of surgical instruments and equipment.',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],*/
            [
                'section_key'       => 'surgery_section_1',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Bariatric',
                'text'              => '<ul><li>Dissectors, clamps, graspers, & hooks.</li><li>Retractor arms.</li><li>Nathanson liver retractors.</li><li>Laparoscopic trocar incision closure devices.</li></ul>',
                'order'             => 1,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],
            [
                'section_key'       => 'surgery_section_2',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Cardiovascular & Thoracic',
                'text'              => '<ul><li>Occlusion Clips and clamps.</li><li>vascular, bulldog, aorta, and anastomosis.</li></ul>',
                'order'             => 2,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 3. ENT
            [
                'section_key'       => 'surgery_section_3',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'ENT',
                'text'              => '<ul><li>Endoscopes reusable instruments.</li><li>Otology reusable instruments.</li><li>Rhinology reusable instruments.</li><li>Tonsillectomy reusable instruments.</li><li>Tracheotomy reusable instruments.</li><li>Bronchoscopy reusable instruments.</li><li>FESS reusable instruments.</li></ul>',
                'order'             => 3,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 4. Gastric Sleeve
            [
                'section_key'       => 'surgery_section_4',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Gastric Sleeve',
                'text'              => '<ul><li>Disposable Laparoscopic Trocars.</li><li>Hand disposable laparoscopic instruments.</li><li>Surgical Staplers.</li></ul>',
                'order'             => 4,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 5. General surgical instruments
            [
                'section_key'       => 'surgery_section_5',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'General surgical instruments',
                'text'              => '<ul><li>Scalpels.</li><li>Knives.</li><li>Scissors (TC / SC / CC / Micro Scissors).</li><li>Forceps (TC / mono- & bipolar / Micro Forceps / Haemostatic Forceps) Vessel Clips; Approximators.</li><li>Clamps (Towel Clamps / Tubing Clamps).</li><li>Needle Holders (TC / Micro Needle Holders).</li></ul>',
                'order'             => 5,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 6. Laparoscopic Surgical Instruments
            [
                'section_key'       => 'surgery_section_6',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Laparoscopic Surgical Instruments',
                'text'              => '<ul><li>Cannulas and Trocars.</li><li>Trocar Incision Closure Devices.</li><li>Electrodes and Electrosurgical.</li><li>Laparoscopic Bipolar Scissors and Graspers.</li><li>Hooks and Probes.</li><li>Knot Pushers.</li><li>Needles and Needle Holders</li></ul>',
                'order'             => 6,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 7. Neuro
            [
                'section_key'       => 'surgery_section_7',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Neuro',
                'text'              => '<ul><li>Brain Retractors.</li><li>Laminectomy Distractors.</li><li>Cranial Rongeurs.</li><li>Scalp Clips and Applying Forceps.</li><li>Galea Hooks.</li><li>Dura Dissectors.</li></ul>',
                'order'             => 7,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 8. OB/GYNE - Gynaecology
            [
                'section_key'       => 'surgery_section_8',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'OB/GYNE - Gynaecology',
                'text'              => '<ul><li>Forceps & Clamps - For uterine and caesarean, hysterectomy and other obstetrics and gynae surgery.</li><li>Cervical Dilators - For stretching the cervical wall and dilating the cervical muscles.</li><li>Diagnostic Vaginal Speculums.</li></ul>',
                'order'             => 8,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 9. Ophthalmic
            [
                'section_key'       => 'surgery_section_9',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Ophthalmic',
                'text'              => '<ul><li>Micro needle holder.</li><li>Phaco choppers.</li><li>Needle holders.</li><li>Glaucoma set.</li><li>Enucleation and cataracts.</li></ul>',
                'order'             => 9,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 10. Orthopaedic
            [
                'section_key'       => 'surgery_section_10',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Orthopaedic',
                'text'              => '<ul><li>Implants and Instruments.</li></ul>',
                'order'             => 10,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 11. Plastic Surgery
            [
                'section_key'       => 'surgery_section_11',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Plastic Surgery',
                'text'              => '<ul><li>Awls, chisels, mallets.</li><li>Gouges, pliers.</li><li>Osteotomes, rasps.</li><li>Rongeurs, and cutting wire.</li></ul>',
                'order'             => 11,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 12. Rigid Telescopes
            [
                'section_key'       => 'surgery_section_12',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Rigid Telescopes',
                'text'              => '<ul><li>Laparoscopic.</li><li>Urology.</li><li>Sinuscopy.</li><li>Gynaecology.</li><li>Arthroscopy.</li><li>Bronchoscopy.</li></ul>',
                'order'             => 12,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 13. Urology
            [
                'section_key'       => 'surgery_section_13',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Urology',
                'text'              => '<ul><li>Cystoscopy instruments set.</li><li>Resectoscope instruments set.</li><li>Urethrotomy instruments set.</li><li>Nephoscopy instruments set.</li><li>Uretero - Reno scope instruments set.</li></ul>',
                'order'             => 13,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 14. Surgical Consumable
            [
                'section_key'       => 'surgery_section_14',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Surgical Consumable',
                'text'              => '<p>Surgical consumables are items that are used during surgery or in the postoperative period. These items can include surgical gloves, gowns, masks, and other medical supplies. There are a variety of reasons why surgical consumables may be necessary. In some cases, they may help to prevent a transfer of infectious.</p>',
                'order'             => 14,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 15. Operating Rooms Consumables
            [
                'section_key'       => 'surgery_section_15',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Operating Rooms Consumables',
                'text'              => '<p>Our range includes Surgical Gowns, Isolation gown, Surgical mask, Cesarean Section Pack, General Surgery Pack, Ophthalmic Drape Pack, Cardiovascular Surgical Pack, Orthopedic Pack, ENT Surgical Pack and Urology Surgical Pack.</p>',
                'order'             => 15,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 16. Nursing Consumables
            [
                'section_key'       => 'surgery_section_16',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'Nursing Consumables',
                'text'              => '<p>Our range includes essentials from PPE such as face masks, gloves and wound management, surgical gowns, surgical drapes alongside patient care basics.</p>',
                'order'             => 16,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 17. CSSD Consumables
            [
                'section_key'       => 'surgery_section_17',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'CSSD Consumables',
                'text'              => '<p>Our range includes Sterilization Wraps, Pouches, Sterilization Container Accessories, Container filters, Transportation Boxes. rigid plastic boxes manufactured and tested to meet requirements for packages used to contain pathogen infected medical instruments and clinical waste being transported on public roads.</p>',
                'order'             => 17,
                'is_deleted'        => 0,
                'showing_user'      => 1,
                'showing_admin'     => 1,
            ],

            // 18. CSSD Equipment
            [
                'section_key'       => 'surgery_section_18',
                'page_name'         => 'surgery',
                'page_id'           => $page->id,
                'title'             => 'CSSD Equipment',
                'text'              => '<p>Sterile Containers – for safe storage and cleaning of all types for the reusable Surgical Instruments and the telescope as well. During surgery, precision and sterility are paramount. Designed to maintain a disinfected environment containers help medical professionals organize surgical instruments and protect them from contamination or damage.</p>',
                'order'             => 18,
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
