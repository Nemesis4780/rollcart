<?php

namespace Database\Seeders\Seller;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $shops = array(
            array(
                "created_at" => "2024-04-24 15:54:12",
                "updated_at" => "2024-04-24 15:54:12",
                "title" => "Trameo",
                "logo" => "shop/logo/trameo-logo.png",
                "url" => "https://www.trameo.de",
                "sort_order" => 1000,
                "active" => 1,
            ),
            array(
                "created_at" => "2024-04-24 15:57:13",
                "updated_at" => "2024-04-24 15:57:13",
                "title" => "ant-Transportgeräte",
                "logo" => "shop/logo/ant-logo.png",
                "url" => "https://ant-transportgeraete.de/",
                "sort_order" => 1000,
                "active" => 1,
            ),
            array(
                "created_at" => "2024-04-24 15:57:55",
                "updated_at" => "2024-04-24 15:57:55",
                "title" => "UDO BÄR",
                "logo" => "shop/logo/udobaer-logo.png",
                "url" => "https://www.udobaer.de/",
                "sort_order" => 1000,
                "active" => 1,
            ),
            array(
                "created_at" => "2024-04-24 15:58:28",
                "updated_at" => "2024-04-24 15:58:28",
                "title" => "Transportsysteme Zentralvertrieb",
                "logo" => "shop/logo/transportsysteme-logo.png",
                "url" => "https://www.dzl-24.de",
                "sort_order" => 1000,
                "active" => 0,
            ),
            array(
                "created_at" => "2024-04-24 15:58:53",
                "updated_at" => "2024-04-24 15:58:53",
                "title" => "Schäger Shop",
                "logo" => "shop/logo/schaefer-shop-logo.png",
                "url" => "http://www.schaefer-shop.de",
                "sort_order" => 1000,
                "active" => 1,
            ),
        );


        foreach($shops as $shop) {
            DB::table('shops')->insert($shop);
        }
    }
}









