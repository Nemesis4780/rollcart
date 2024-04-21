<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

//        $adminUser = User::createOrFirst([
//            'name' => 'Admin',
//            'email' => 'info@wabsolute.de',
//            'password' => 'admin123!',
//            'super' => true,
//        ]);

        $adminUser = User::createOrFirst([
            'name' => 'Wedde',
            'email' => 'Nemesis4780@web.de',
            'password' => 'T8u9iLfEJBQ0m29E4gEg',
//            'password' => '$2y$12$rWDfWsH7qtRvjdqRptY4YOosqwVwF0DoAa71Z3mxtC9yyXGgojDf2',
            'super' => true,
            'preferences' => '{"runway": {"seller": {"columns": ["title", "is_specialist", "is_online_seller", "is_catalog_shipper", "sort_order"]}, "country": {"columns": ["title", "title_short", "sort_order"]}, "product": {"columns": ["title", "subcategory_id", "product_variants", "sort_order"]}, "productcategory": {"columns": ["title", "sort_order"]}, "productvariation": {"columns": ["title", "product_id", "sort_order"]}, "productsubcategory": {"columns": ["title", "category_id", "sort_order"]}}, "collections": {"news": {"columns": ["title", "date", "status"]}, "sellers": {"columns": ["title", "is_specialist", "is_online_seller", "is_catalog_shipper", "status"]}, "countries": {"columns": ["title", "title_short"]}}}'
        ]);

        $this->call([
            Seller\SellerSeeder::class,
            Country\CountrySeeder::class,
            Product\ProductCategorySeeder::class,
//            Product\ProductSeeder::class,
        ]);
    }
}
