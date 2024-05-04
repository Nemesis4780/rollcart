<?php

namespace Database\Seeders\Product;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = array(
            array(
                "id" => 1,
                "created_at" => "2024-04-24 16:21:00",
                "updated_at" => "2024-04-24 16:21:00",
                "title" => "Plattformwagen",
                "short_description" => "[{\"type\":\"orderedList\",\"attrs\":{\"start\":1},\"content\":[{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Stahlrohr \\u00f8 26,9 x 1,75 mm fest auf Grundrahmen geschwei\\u00dft\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Lenkrollen mit blaugrauer TPE-Bereifung - Rillenkugellager, Geh\\u00e4use verzinkt, Feststeller an den Lenkrollen gem\\u00e4\\u00df Europ\\u00e4ischer Norm EN 1757-3\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Bockrollen (nicht drehbar) mit blaugrauer TPE-Bereifung - Rillenkugellager, Geh\\u00e4use verzinkt\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Ladefl\\u00e4che aus Holzwerkstoffplatte (MDF) mit Buchedekor\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Profilstahlrahmen aus Winkelstahl und Quadratrohr\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Pulverbeschichtung RAL 5010 enzianblau\"}]}]}]}]",
                "description" => "[{\"type\":\"bulletList\",\"content\":[{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Stahlrohr \\u00f8 26,9 x 1,75 mm fest auf Grundrahmen geschwei\\u00dft\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Lenkrollen und Bockrollen (TPE-Bereifung)\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Ladefl\\u00e4che aus Holzwerkstoffplatte (MDF) mit Buchedekor\"}]}]},{\"type\":\"listItem\",\"content\":[{\"type\":\"paragraph\",\"content\":[{\"type\":\"text\",\"text\":\"Pulverbeschichtung RAL 5010 enzianblau\"}]}]}]}]",
                "images" => "[\"product\\/schiebeb\\u00fcgelwagen\\/plattformwagen\\/02-5988-06.jpg\"]",
                "sort_order" => NULL,
                "crosselling" => NULL,
                "datasheet" => NULL,
                "subcategory_id" => "74a4a51f-7e26-4b70-87fc-40faf44df3c1",
                "seo_title" => NULL,
                "seo_keywords" => NULL,
                "seo_description" => NULL,
                "seo_index" => 1,
                "seo_follow" => 1,
                "active" => 1,
                "slug" => "plattformwagen",
            ),
        );


        foreach($products as $product) {
            DB::table('products')->insert($product);
        }

    }
}
