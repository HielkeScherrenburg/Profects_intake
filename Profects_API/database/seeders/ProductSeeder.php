<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('products')->insert([

            // Groente & Fruit
            ['name' => 'Appels', 'price' => 2.49, 'description' => 'Verse rode appels', 'weight' => 1000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Bananen', 'price' => 1.99, 'description' => 'Rijpe bananen', 'weight' => 1000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tomaten', 'price' => 2.29, 'description' => 'Verse trostomaten', 'weight' => 500, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Komkommer', 'price' => 0.99, 'description' => null, 'weight' => 400, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Paprika mix', 'price' => 2.79, 'description' => 'Rood, geel en groen', 'weight' => 500, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sla', 'price' => 1.49, 'description' => 'IJsbergsla', 'weight' => 300, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Aardbeien', 'price' => 3.99, 'description' => 'Verse aardbeien', 'weight' => 250, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Druiven', 'price' => 2.99, 'description' => 'Rode druiven', 'weight' => 500, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Peren', 'price' => 2.79, 'description' => 'Conference peren', 'weight' => 1000, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Citroenen', 'price' => 1.29, 'description' => 'Verse citroenen', 'weight' => 500, 'category_id' => 1, 'created_at' => $now, 'updated_at' => $now],

            // Vlees
            ['name' => 'Kipfilet', 'price' => 5.99, 'description' => 'Verse kipfilet', 'weight' => 500, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rundergehakt', 'price' => 4.49, 'description' => null, 'weight' => 500, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Varkenshaas', 'price' => 6.99, 'description' => null, 'weight' => 400, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kalkoenfilet', 'price' => 6.49, 'description' => null, 'weight' => 400, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Speklapjes', 'price' => 4.99, 'description' => null, 'weight' => 500, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Biefstuk', 'price' => 7.99, 'description' => null, 'weight' => 250, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Hamburger', 'price' => 3.99, 'description' => 'Rundvlees', 'weight' => 300, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kip drumsticks', 'price' => 4.49, 'description' => null, 'weight' => 500, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Varkensfilet', 'price' => 5.49, 'description' => null, 'weight' => 400, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Gehaktballen', 'price' => 4.99, 'description' => null, 'weight' => 400, 'category_id' => 2, 'created_at' => $now, 'updated_at' => $now],

            // Vis
            ['name' => 'Zalmfilet', 'price' => 7.99, 'description' => null, 'weight' => 300, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tonijnsteak', 'price' => 8.49, 'description' => null, 'weight' => 250, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kabeljauw', 'price' => 6.99, 'description' => null, 'weight' => 300, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Forel', 'price' => 5.99, 'description' => null, 'weight' => 250, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Garnalen', 'price' => 9.99, 'description' => null, 'weight' => 200, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mosselen', 'price' => 7.49, 'description' => null, 'weight' => 1000, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Tonijn uit blik', 'price' => 2.49, 'description' => null, 'weight' => 150, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Makreel', 'price' => 5.49, 'description' => null, 'weight' => 250, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Haring', 'price' => 3.99, 'description' => null, 'weight' => 200, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sardines', 'price' => 2.99, 'description' => null, 'weight' => 150, 'category_id' => 3, 'created_at' => $now, 'updated_at' => $now],

            // Zuivel
            ['name' => 'Halfvolle melk', 'price' => 1.19, 'description' => '1 liter', 'weight' => 1000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Yoghurt', 'price' => 1.49, 'description' => 'Naturel', 'weight' => 1000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Roomboter', 'price' => 2.29, 'description' => null, 'weight' => 250, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kaas jong', 'price' => 3.49, 'description' => null, 'weight' => 500, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kaas belegen', 'price' => 3.99, 'description' => null, 'weight' => 500, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Slagroom', 'price' => 1.99, 'description' => null, 'weight' => 250, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Crème fraîche', 'price' => 1.79, 'description' => null, 'weight' => 200, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Melkpoeder', 'price' => 4.49, 'description' => null, 'weight' => 500, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Karnemelk', 'price' => 0.99, 'description' => null, 'weight' => 1000, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Roomkaas', 'price' => 2.99, 'description' => null, 'weight' => 200, 'category_id' => 4, 'created_at' => $now, 'updated_at' => $now],

            // Brood
            ['name' => 'Wit brood', 'price' => 1.29, 'description' => null, 'weight' => 500, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Volkoren brood', 'price' => 1.49, 'description' => null, 'weight' => 500, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Meergranen brood', 'price' => 1.69, 'description' => null, 'weight' => 500, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Baguette', 'price' => 1.29, 'description' => null, 'weight' => 250, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ciabatta', 'price' => 1.59, 'description' => null, 'weight' => 250, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kaiserbroodjes', 'price' => 2.29, 'description' => '6 stuks', 'weight' => 360, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Pistoletjes', 'price' => 2.49, 'description' => '6 stuks', 'weight' => 360, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Waldkorn brood', 'price' => 1.79, 'description' => null, 'weight' => 500, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Kornspitz', 'price' => 1.59, 'description' => null, 'weight' => 250, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Rozijnenbrood', 'price' => 1.99, 'description' => null, 'weight' => 500, 'category_id' => 5, 'created_at' => $now, 'updated_at' => $now],

            // Diepvries
            ['name' => 'Diepvrieserwten', 'price' => 1.49, 'description' => null, 'weight' => 400, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries spinazie', 'price' => 1.29, 'description' => null, 'weight' => 450, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries aardbeien', 'price' => 2.99, 'description' => null, 'weight' => 500, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvriespizza', 'price' => 3.99, 'description' => null, 'weight' => 350, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries lasagne', 'price' => 4.49, 'description' => null, 'weight' => 400, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries friet', 'price' => 2.49, 'description' => null, 'weight' => 600, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries spinaziepuree', 'price' => 1.79, 'description' => null, 'weight' => 400, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries doperwten', 'price' => 1.49, 'description' => null, 'weight' => 400, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries broccoli', 'price' => 1.99, 'description' => null, 'weight' => 450, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Diepvries fruitsalade', 'price' => 3.49, 'description' => null, 'weight' => 400, 'category_id' => 6, 'created_at' => $now, 'updated_at' => $now],

            // Snacks
            ['name' => 'Chips naturel', 'price' => 1.49, 'description' => null, 'weight' => 175, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chips paprika', 'price' => 1.49, 'description' => null, 'weight' => 175, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Notenmix', 'price' => 2.99, 'description' => null, 'weight' => 200, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Popcorn', 'price' => 1.29, 'description' => null, 'weight' => 100, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Zoutjes', 'price' => 0.99, 'description' => null, 'weight' => 150, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Drop', 'price' => 1.49, 'description' => null, 'weight' => 200, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chocolade reep', 'price' => 1.29, 'description' => null, 'weight' => 100, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Koekjes', 'price' => 1.99, 'description' => null, 'weight' => 200, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chocoladepinda’s', 'price' => 2.49, 'description' => null, 'weight' => 150, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Chocolade fudge', 'price' => 2.99, 'description' => null, 'weight' => 150, 'category_id' => 7, 'created_at' => $now, 'updated_at' => $now],

            // Dranken
            ['name' => 'Cola', 'price' => 1.89, 'description' => '1.5 liter', 'weight' => 1500, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sinaasappelsap', 'price' => 2.49, 'description' => 'Vers geperst', 'weight' => 1000, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Mineraalwater', 'price' => 0.69, 'description' => null, 'weight' => 500, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Appelsap', 'price' => 1.99, 'description' => null, 'weight' => 1000, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Melkchocolade drank', 'price' => 1.29, 'description' => null, 'weight' => 500, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Groentesap', 'price' => 2.79, 'description' => null, 'weight' => 500, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Ijsthee', 'price' => 1.49, 'description' => null, 'weight' => 500, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Koffie', 'price' => 3.49, 'description' => null, 'weight' => 250, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Thee', 'price' => 2.99, 'description' => null, 'weight' => 100, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
            ['name' => 'Sportdrank', 'price' => 2.49, 'description' => null, 'weight' => 500, 'category_id' => 8, 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
