<?php

namespace Database\Seeders\Seller;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $sellers = array(
            array(
                "id" => 1,
                "created_at" => NULL,
                "updated_at" => "2024-04-18 22:18:59",
                "title" => "Heuger Cottbus GmbH",
                "name" => "Heuger Cottbus GmbH",
                "street" => "Merzdorfer Weg",
                "street_number" => "7d",
                "zip" => "03042",
                "place" => "Cottbus",
                "country_id" => 1,
                "logo" => "seller/logo/heuger_logo.jpg",
                "catalog_cover" => "seller/catalog_cover/heuger_catalog.jpg",
                "text" => "Hier bieten wir Ihnen eine große Auswahl an Industriebedarf und Werkzeugen. Profitieren Sie von den langjährigen Erfahrungen und lassen Sie sich professionell und individuell von uns beraten.",
                "phone" => "0355-493766",
                "fax" => "0355-711209",
                "email" => "info@heuger-cottbus.de",
                "url" => "http://www.heuger-cottbus.de/",
                "latitude" => 51.78,
                "longitude" => 14.38,
                "is_specialist" => 1,
                "is_online_seller" => 1,
                "is_catalog_shipper" => 1,
            ),
            array(
                "id" => 2,
                "created_at" => "2024-04-18 19:19:21",
                "updated_at" => "2024-04-18 20:50:58",
                "title" => "buero-perfect.eu",
                "name" => "buero-perfect.eu",
                "street" => "Nordstraße",
                "street_number" => "8a",
                "zip" => "06667",
                "place" => "Weißenfels",
                "country_id" => 1,
                "logo" => "seller/logo/buero_perfect_logo.jpg",
                "catalog_cover" => NULL,
                "text" => NULL,
                "phone" => "03443/800706",
                "fax" => NULL,
                "email" => "buero-perfect@t-online.de",
                "url" => NULL,
                "latitude" => 51.21,
                "longitude" => 11.97,
                "is_specialist" => 1,
                "is_online_seller" => 0,
                "is_catalog_shipper" => 0,
            ),
            array(
                "id" => 3,
                "created_at" => "2024-04-18 19:30:18",
                "updated_at" => "2024-04-18 20:51:05",
                "title" => "BERGER Erwin e.K.",
                "name" => "BERGER Erwin e.K.",
                "street" => "Köpenicker Straße",
                "street_number" => "235",
                "zip" => "12555",
                "place" => "Berlin",
                "country_id" => 1,
                "logo" => "seller/logo/berger_logo.jpg",
                "catalog_cover" => NULL,
                "text" => NULL,
                "phone" => "030/6576-2445",
                "fax" => NULL,
                "email" => "schweda@berger-betriebseinrichtungen.de",
                "url" => NULL,
                "latitude" => 52.47,
                "longitude" => 13.56,
                "is_specialist" => 1,
                "is_online_seller" => 0,
                "is_catalog_shipper" => 0,
            ),
            array(
                "id" => 4,
                "created_at" => "2024-04-18 20:50:22",
                "updated_at" => "2024-04-18 20:50:31",
                "title" => "Ing. R. Ment AG",
                "name" => "Ing. R. Ment AG",
                "street" => "Liestalerstraße",
                "street_number" => "33",
                "zip" => "4412",
                "place" => "Nuglar",
                "country_id" => 2,
                "logo" => "seller/logo/ment_ag_logo.jpg",
                "catalog_cover" => "seller/catalog_cover/ment_ag_catalog.jpg",
                "text" => "Der Online-Shop von Ment bietet Ihnen qualitativ hochwertige Hebe-, Förder und Kippeinrichtungen an. Wir sind bekannt für die fachmännische Beratung und freuen uns auf Ihren Besuch.",
                "phone" => "+41 (0)56 624 30 60",
                "fax" => "0041 5662/43709",
                "email" => "info@ment.ch",
                "url" => "http://www.ment.ch/",
                "latitude" => 47.47,
                "longitude" => 7.70,
                "is_specialist" => 1,
                "is_online_seller" => 1,
                "is_catalog_shipper" => 0,
            ),
        );






        foreach($sellers as $seller) {
            DB::table('sellers')->insert($seller);
        }
    }
}
