<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;
use App\Models\Categories;
use App\Models\SubCategories;
use App\Models\Brands;
use App\Models\Countries;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [1, 'Eye Protection', 'Safety Spectacles', 'UD 46 Clear', '90014307', 0, 0, 'ANSI Z87.1, EN 166, EN 170, CE', 'INDIA', 'UDYOGI'],
            [2, 'Eye Protection', 'Safety Spectacles', 'UD 46 Smoked', '90014308', 0, 0, 'ANSI Z87.1, EN 166, EN 170, EN 172, CE', 'INDIA', 'UDYOGI'],
            [3, 'Eye Protection', 'Safety Spectacles', 'UD 71 Clear', '90014309', 0, 0, 'ANSI Z87.1, EN 166, EN 170, CE', 'INDIA', 'UDYOGI'],
            [4, 'Eye Protection', 'Safety Spectacles', 'UD 71 Smoked', '90014310', 0, 0, 'ANSI Z87.1, EN 166, EN 170, EN 172, CE', 'INDIA', 'UDYOGI'],
            [5, 'Eye Protection', 'Safety Spectacles', 'UD 30 Clear', '90014305', 0, 0, 'ANSI Z87.1, EN 166, EN 170, CE', 'INDIA', 'UDYOGI'],
            [6, 'Eye Protection', 'Safety Spectacles', 'UD 30 Smoked', '90014306', 0, 0, 'ANSI Z87.1, EN 166, EN 170, EN 172, CE', 'INDIA', 'UDYOGI'],
            [7, 'Eye Protection', 'Safety Spectacles', 'Neo Lite Plus', '90014302', 0, 0, 'ANSI Z87.1, EN 166, CE', 'INDIA', 'UDYOGI'],
            [8, 'Eye Protection', 'Safety Spectacles', 'PS 33 Clear', '90014303', 0, 0, 'EN 166 1 FT EN 170 2C-1.2 (CLEAR) ANSI/ISEA Z87', 'UNITED KINGDOM', 'PORTWEST'],
            [9, 'Eye Protection', 'Safety Spectacles', 'WORKSafe® Strider I', '90014304', 0, 0, 'ANSI Z87.1-2003 and SS473:2011', 'SINGAPORE', 'WORK SAFE'],
            [10, 'Eye Protection', 'Accessories', 'PA02 - Lens Cleaning Station', '90014101', 0, 0, 'nan', 'UNITED STATES OF AMERICA', 'PORTWEST'],
            [11, 'Eye Protection', 'Safety Goggles', 'UD 49', '90014204', 0, 0, 'ANSI Z87.1, EN 166', 'INDIA', 'UDYOGI'],
            [12, 'Fall Protection', 'Full Body Harnesses', 'UB 102', '90015301', 0, 0, 'EN 361 CE', 'INDIA', 'UDYOGI'],
            [13, 'Fall Protection', 'Full Body Harnesses', 'UB 103', '90015302', 0, 0, 'EN 361 CE', 'INDIA', 'UDYOGI'],
            [14, 'Fall Protection', 'Full Body Harnesses', 'UB 104', '90015303', 0, 0, 'EN 361 CE', 'INDIA', 'UDYOGI'],
            [15, 'Fall Protection', 'Full Body Harnesses', 'UB 105', '90015304', 0, 0, 'EN 361 CE', 'INDIA', 'UDYOGI'],
            [16, 'Fall Protection', 'Full Body Harnesses', 'Ultratek', '90015305', 0, 0, 'EN 361, EN 358 and EN 813', 'INDIA', 'UDYOGI'],
            [17, 'Fall Protection', 'Full Body Harnesses', 'WORKGard Full Body Harness 512', '90015306', 0, 0, 'EN361, SS528: Part 1', 'SINGAPORE', 'WORK GUARD'],
            [18, 'Fall Protection', 'Full Body Harnesses', 'WORKSafe® FULL BODY HARNESS 122', '90015308', 0, 0, 'EN 361, SS528: Part 1', 'SINGAPORE', 'WORK SAFE'],
            [19, 'Fall Protection', 'Full Body Harnesses', 'WP 01', '90015307', 0, 0, 'EN 358', 'INDIA', 'UDYOGI'],
            [20, 'Fall Protection', 'Connecting Lanyard', 'RL 22', '90015202', 0, 0, 'EN 355:2002 and 354:2010', 'INDIA', 'UDYOGI'],
            [21, 'Fall Protection', 'Connecting Lanyard', 'BL 22', '90015201', 0, 0, 'EN 355:2002 and 354:2010', 'INDIA', 'UDYOGI'],
            [22, 'Fall Protection', 'Self Retracting Lifeline', 'Proton', '90015402', 0, 0, 'EN 360:2002', 'INDIA', 'UDYOGI'],
            [23, 'Fall Protection', 'Anchorage Devices', 'HLL 20', '90015103', 0, 0, 'EN 795 - Class-B', 'INDIA', 'UDYOGI'],
            [24, 'Protective Apparel', 'High Visibility', 'C 497', '90010101', 0, 0, 'RIS-3279-TOM ISSUE 1 (ORANGE ONLY),EN ISO 20471 Class 2', 'UNITED KINGDOM', 'PORTWEST'],
            [25, 'Protective Apparel', 'Rain Wear', 'Rain Coat', '90010202', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [30, 'Protective Apparel', 'Rain Wear', 'Rain Suit', '90010205', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [31, 'Head Protection', 'Safety Helmet', 'Ultra Vent 7000', '90020338', 0, 0, 'EN 397', 'INDIA', 'UDYOGI'],
            [32, 'Head Protection', 'Safety Helmet', 'Ultra Pro 3000', '90020321', 0, 0, 'EN 397', 'INDIA', 'UDYOGI'],
            [33, 'Head Protection', 'Safety Helmet', 'Fusion 6000', '.', 0, 0, 'EN 397, CE', 'INDIA', 'UDYOGI'],
            [34, 'Hand Protection', 'Cut Resistant Glove', 'A690', '90019201', 0, 0, 'CE FOOD SAFE EN 420 , EN 388:2016 , EN 407 ANSI/ISEA 105 - 2016 AS/NZS 2161 .2 , AS/NZS 2161 .3 , AS/NZS 2161 .4', 'UNITED KINGDOM', 'PORTWEST'],
            [35, 'Protective Apparel', 'High Visibility', 'INSHV300', '90010108', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [36, 'Protective Apparel', 'High Visibility', 'INSHV600', '90010113', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [37, 'Protective Apparel', 'High Visibility', 'INSHV100', '90010104', 0, 0, 'nan', 'CHINA', 'NONE'],
            [38, 'Protective Apparel', 'High Visibility', 'HI-VIS Body Staps', '90010102', 0, 0, 'nan', 'CHINA', 'NONE'],
            [39, 'Spill Control', 'Oil Spill', 'Oil Spill Kit - 150 Ltrs', '90027202', 0, 0, 'ASTM 726 (For Absorbent)', 'INDIA', 'UDYOGI'],
            [40, 'Spill Control', 'Oil Spill', 'Oil Spill Kit - 55 Ltrs', '90027203', 0, 0, 'ASTM 726 (For Absorbent)', 'INDIA', 'UDYOGI'],
            [41, 'Spill Control', 'Oil Spill', 'SM61 - 50 Liter Oil Only Kit', '.', 0, 0, 'BS 7959-1 BS 7959-2 BS 7959-3', 'UNITED KINGDOM', 'PORTWEST'],
            [40, 'Spill Control', 'Oil Spill', 'Oil Spill Kit – 55 Ltrs', '90027203', 0, 0, 'ASTM 726 (For Absorbent)', 'INDIA', 'UDYOGI'],
            [41, 'Spill Control', 'Oil Spill', 'SM61 - 50 Liter Oil Only Kit', '.', 0, 0, 'BS 7959-1 BS 7959-2 BS 7959-3', 'UNITED KINGDOM', 'PORTWEST'],
            [42, 'Spill Control', 'Chemical Spill', 'Chemical Spill Kit – 150 Liter', '90027102', 0, 0, 'ASTM 726 (For Absorbent)', 'INDIA', 'UDYOGI'],
            [43, 'Spill Control', 'Chemical Spill', 'Chemical Spill Kit – 55 Liter', '90027103', 0, 0, 'nan', 'INDIA', 'UDYOGI'],
            [44, 'Spill Control', 'Chemical Spill', 'SM90 - 20 Liter Chemical Kit', '.', 0, 0, 'BS 7959-1 BS 7959-3', 'UNITED KINGDOM', 'PORTWEST'],
            [45, 'Spill Control', 'Spill Containment Pallets', 'Drum Spill Containment Pallet', '4 Drum of 310 Ltr 2 Way Entry', 0, 0, 'FDA: CFR Title 21, 177.1520', 'INDIA', 'NONE'],
            [46, 'Spill Control', 'Spill Containment Pallets', 'Drum Spill Containment Pallet', '2 Drum of 200 Ltr 2 Way Entry', 0, 0, 'FDA: CFR Title 21, 177.1520', 'INDIA', 'NONE'],
            [47, 'Foot Protection', 'Gum Boots', 'FS100', '90018101', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [48, 'Foot Protection', 'Gum Boots', 'FS100ST', '90018111', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [49, 'Foot Protection', 'Gum Boots', 'FS100STM', '90018160', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [50, 'Foot Protection', 'Safety Shoes', 'PJ0086', '90018203', 0, 0, 'nan', 'SRI LANKA', 'NONE'],
            [51, 'Foot Protection', 'Waders', 'FW74 - Safety Chest Wader S5', '.', 0, 0, 'EN ISO 20345 S5', 'UNITED KINGDOM', 'PORTWEST'],
            [52, 'Hearing Protection', 'Ear Plugs', 'EP02 - PU Foam Ear Plug', '90021202', 0, 0, 'EN 352-2 SNR 36dB, ANSI S3.19 32dB', 'UNITED KINGDOM', 'PORTWEST'],
            [53, 'Hearing Protection', 'Ear Plugs', 'EP08 - Corded PU Foam Ear Plug', '90021203', 0, 0, 'nan', 'UNITED KINGDOM', 'PORTWEST'],
            [54, 'Emergency Station', 'Safety Shower Station', 'Safety Shower and Eyewash 6220GI', '.', 0, 0, 'IS: 10592:1982', 'INDIA', 'UDYOGI'],
            [55, 'Emergency Station', 'Safety Eyewash', 'Emergency Eye/Face Wash Fountain with Pedal 4710GI', 'UD', 0, 0, 'IS: 10592:1982', 'INDIA', 'UDYOGI'],
            [56, 'Emergency Station', 'Safety Eyewash', 'Emergency Eye/Face Wash Fountain with Pedal 4710SS', 'UDSSEWS', 0, 0, 'IS: 10592:1982', 'INDIA', 'UDYOGI'],
            [57, 'Emergency Station', 'Portable Eyewash', 'EW-500 ml', 'EW-500 ml', 0, 0, 'nan', 'INDIA', 'UDYOGI'],
            [58, 'Hearing Protection', 'Ear Muffs', 'PS48', 'Portwest Slim Ear Muff', 0, 0, 'EN 352-1 SNR 22dB', 'UNITED KINGDOM', 'PORTWEST'],
            [59, 'Hearing Protection', 'Ear Muffs', 'PS46', 'Premium Ear Muff', 0, 0, 'EN 352-1 SNR 34dB', 'UNITED KINGDOM', 'PORTWEST'],
            [60, 'Industrial Products', 'Convex Mirrors', 'Exterior Convex Mirrors', 'Convex Mirrors', 0, 0, '.', 'CHINA', 'NONE'],
            [61, 'Industrial Products', 'Convex Mirrors', '180° Half Dome Mirrors', 'Dome Mirrors', 0, 0, '.', 'CHINA', 'NONE'],
            [62, 'Industrial Products', 'Convex Mirrors', '360° Full Dome Mirrors', 'Dome Mirrors', 0, 0, '.', 'CHINA', 'NONE'],
            [63, 'Emergency Station', 'Portable Eyewash', 'Portable Gravity Fed Eyewash', 'model 7501', 0, 0, 'ANSI Z358.1', 'UNITED STATES OF AMERICA', 'HAWS'],
            [64, 'Protective Apparel', 'Heat & Fire Protection', 'Alumunised Suit', 'Fire Proximity', 0, 0, 'UNI EN ISO 13688:2013 | ISO 15538:200', 'ITALY', 'Giordani Giancarlo'],
            [65, 'Protective Apparel', 'Heat & Fire Protection', 'Fire man Suit', 'Fire Proximity', 0, 0, 'EN 469:2005+A1:2006 | EN 1149-5:2008', 'ITALY', 'Giordani Giancarlo'],
            [66, 'Respiratory Protection', 'Full Face Mask', 'P516 -Helsinki Full Face Mask', 'Universal Thread Blue', 0, 0, 'EN 148 -1 EN 136 Class 3', 'UNITED KINGDOM', 'PORTWEST'],
            [67, 'Respiratory Protection', 'Full Face Mask', 'P500 - Vienna Full Face Mask', 'Black', 0, 0, 'EN 136 Class 2', 'UNITED KINGDOM', 'PORTWEST'],
            [68, 'Protective Apparel', 'Work Wear', 'ST35 - BizTex SMS Coverall With Knitted Cuff Type 5/6', 'ST35', 0, 0, 'EN 1073-2, EN ISO 13982 -Type 5, EN 13034 Type 6, EN 1149 -5', 'UNITED KINGDOM', 'PORTWEST'],
            [69, 'Protective Apparel', 'Work Wear', 'Disposable Coverall -40 GSM/50 GSM/60 GSM', 'DCSL', 0, 0, 'nan', 'SRI LANKA', 'INSYNC'],
            [70, 'Protective Apparel', 'Work Wear', 'BizTex Microporous Coverall Type 3/4/5/6', 'ST70', 0, 0, 'EN 14605 Type 3B, EN 14605 Type 4B, EN 13034 Type 6B, EN ISO 13982 Type 5B, EN 14126, EN 1073-2, EN 1149 -5', 'UNITED KINGDOM', 'PORTWEST'],
            [74, 'Hearing Protection', 'Ear Muffs', 'ET 40', 'UDYOGI General Ear Muff', 0, 0, 'EN352-1', 'INDIA', 'UDYOGI'],
            [72, 'Protective Apparel', 'Work Wear', 'VisTex SMS Coverall Type 5/6', 'ST36', 0, 0, 'EN 1149 -5, EN 1073-2, EN 13034 Type 6, EN ISO 13982 Type 5', 'UNITED KINGDOM', 'PORTWEST'],
        ];

        foreach ($products as $product) {
            $category = Categories::where('name', $product[1])->first();
            $subCategory = SubCategories::where('name', $product[2])->where('category_id', $category->id)->first();
            $brand = Brands::where('name', $product[9])->first();
            $country = Countries::where('name', $product[8])->first();

            Products::create([
                'category_id' => $category->id,
                'sub_category_id' => $subCategory->id,
                'brand' => $brand->id,
                'title' => $product[3],
                'product_code' => $product[4],
                'dbl_retail' => $product[5],
                'dbl_wholesale' => $product[6],
                'remarks' => $product[7],
                'country' => $country->id,
            ]);
        }
    }
}
