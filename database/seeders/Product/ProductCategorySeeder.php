<?php

namespace Database\Seeders\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {



        $product_categories = [
            [ 'title' => 'Platformwage', 'sort_order' => 10 ],
            [ 'title' => 'Tisch-, Werkstatt-, Montagewagen', 'sort_order' => 20 ],
            [ 'title' => 'Etagenwagen', 'sort_order' => 30 ],
            [ 'title' => 'Beistell- &amp; Kommissionierwagen', 'sort_order' => 40 ],
            [ 'title' => 'Kasten- &amp; Schrankwagen', 'sort_order' => 50 ],
            [ 'title' => 'Werkstück-, Plattenwagen-Karren', 'sort_order' => 60 ],
            [ 'title' => 'Handkarren, Fahrradanhänger, Handpritschenwagen', 'sort_order' => 70 ],
            [ 'title' => 'Schwerlast-Industrieanhänger, Langmaterialanhänger, -Wagen &amp; -Roller', 'sort_order' => 80 ],
            [ 'title' => 'Fasskipper &amp; -Karren, Stahlflaschenkarren', 'sort_order' => 90 ],
            [ 'title' => 'Stapel-, Treppen-, Stahlrohr- &amp; Holzsackkarren', 'sort_order' => 100 ],
            [ 'title' => 'Büro- &amp; Aktentransportwagen, Stehpulte', 'sort_order' => 110 ],
            [ 'title' => 'Aluminium-Transportgeräte', 'sort_order' => 120 ],
            [ 'title' => 'Edelstahlwagen', 'sort_order' => 130 ],
            [ 'title' => 'Zubehör', 'sort_order' => 140 ],
            [ 'title' => 'Räder und Rollen', 'sort_order' => 150 ],
            [ 'title' => 'ESD-Plattformwagen / Tischwagen / Schrankwagen / Fasskarren', 'sort_order' => 160 ]
        ];

        foreach($product_categories as $product_category) {
            DB::table('product_categories')->insert($product_category);
        }

    }
}
