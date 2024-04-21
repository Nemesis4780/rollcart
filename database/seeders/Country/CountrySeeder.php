<?php

namespace Database\Seeders\Country;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $countries = [
            [ 'id' => 1, 'title' => 'Deutschland', 'title_short' => 'de', 'sort_order' => 10 ],
            [ 'id' => 2, 'title' => 'Schweiz', 'title_short' => 'ch', 'sort_order' => 20 ],
            [ 'id' => 3, 'title' => 'Österreich', 'title_short' => 'at', 'sort_order' => 30 ],
            [ 'id' => 4, 'title' => 'Niederland', 'title_short' => 'nl', 'sort_order' => 40 ],
            [ 'id' => 5, 'title' => 'Luxemburg', 'title_short' => 'lu', 'sort_order' => 50 ],
            [ 'id' => 6, 'title' => 'Frankreich', 'title_short' => 'fr', 'sort_order' => 60 ],
        ];

        foreach($countries as $country) {
            DB::table('countries')->insert($country);
        }
    }
}
