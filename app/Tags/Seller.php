<?php

namespace App\Tags;

use Statamic\Tags\Tags;
use Illuminate\Support\Facades\DB;

use Statamic\Facades\Entry;



class Seller extends Tags
{
    /**
     * The {{ seller }} tag.
     *
     * @return string|array
     */
    public function index()
    {
        $sellers = \App\Models\Seller::query()
            ->where('is_specialist', '=', true)
            ->get();


//        $limit = $this->params->get('limit');
        return $sellers;
    }


    public function mapp() {
        // https://statamic.dev/extending/data

        $map = [];

        $countries = Entry::query()
            ->where('collection', 'countries')
            ->get();

        foreach($countries as $country) {
            if(!$country['title_short']) continue;
            $map[$country['title_short']] = null;
        }

        $sellers = Entry::query()
            ->where('collection', 'sellers')
            ->where('is_specialist', '=', true)
            ->orderBy('country', 'asc')
            ->orderBy('zip', 'asc')
            ->get();

        foreach ($sellers as $seller) {

            $country = $seller['country'];


            if(!$country) continue;

            $country_title = $country['title'];
            $country = $country['title_short'];

            // ADD COUNTRY DATA
            if( !(isset($map[ $country ]) && array( $map[ $country ] ) && count( $map[ $country ] ) > 0 ) ) {

                $map[ $country ] = [
                    'country' => [
                        'title' => $country_title,
                        'title_short' => $country,
                    ]
                ];
            }

            // ADD SELLER DATA
            $zip_code_area = trim($seller['zip'])[0];

            $map[$country]['zip_codes'][$zip_code_area]['zip_code_area'] = $zip_code_area;
            $map[$country]['zip_codes'][$zip_code_area]['sellers'][] = $seller;


        }

        // REINDEX FOR STATAMIX
        $map = array_filter($map);
        $map = array_values($map);

        return $map;
    }



    public function mappCenter() {

        $seller = Entry::query()
            ->where('collection', 'sellers')
            ->where('is_specialist', '=', true)
            ->orderBy('order', 'asc')
            ->first();

        return $seller;
    }



    /**
     * Get all the data for the leaflet-map black and country-/zip-selection
     *
     * @return array
     */
    public function map() {
//        $countries = \App\Models\Country::query()->get();

        $sellers = DB::table('countries')
            ->join('sellers', 'countries.id', '=', 'sellers.country_id')
            ->where('is_specialist', '=', true)
            ->select('sellers.*', 'countries.title AS country_title', 'countries.title_short AS country_title_short')
            ->orderBy('zip', 'asc')
            ->get()->toArray();

        $sellers = json_decode(json_encode($sellers), true);

        $map = [];
        foreach($sellers as $seller) {
            // ADD COUNTRY DATA
            if( !(
                    isset($map[ $seller['country_id'] ]) &&
                    array( $map[ $seller['country_id'] ] ) &&
                    count( $map[ $seller['country_id'] ] ) > 0
                ) ) {

                $map[ $seller['country_id'] ] = [
                    'country' => [
                        'title' => $seller['country_title'],
                        'title_short' => $seller['country_title_short'],
                    ]
                ];
            }

            // ADD SELLER DATA
            $zip_code_area = trim($seller['zip'][0]);

            $map[ $seller['country_id'] ]['zip_codes'][$zip_code_area]['zip_code_area'] = $zip_code_area;
            $map[ $seller['country_id'] ]['zip_codes'][$zip_code_area]['sellers'][] = $seller;
        }

        return $map;

    }



    /**
     * Return center of leaf-let-map, currently it is the location of the first seller.
     *
     * @return array
     */
    public function mapCenter() {
        $seller = \App\Models\Seller::query()
            ->where('is_specialist', '=', true)
            ->first();
        return $seller;
    }


    /**
     * Returns all sellers, for Interet-Tab
     * @return array
     */
    public function internetSeller() {

        $sellers = DB::table('countries')
            ->join('sellers', 'countries.id', '=', 'sellers.country_id')
            ->where('is_online_seller', '=', true)
            ->select('sellers.*', 'countries.title AS country_title', 'countries.title_short AS country_title_short')
            ->orderBy('sort_order', 'asc')
            ->get()->toArray();

        $sellers = json_decode(json_encode($sellers), true);

        return $sellers;
    }

    public function catalogShippers() {
        $sellers = DB::table('countries')
            ->join('sellers', 'countries.id', '=', 'sellers.country_id')
            ->where('is_catalog_shipper', '=', true)
            ->select('sellers.*', 'countries.title AS country_title', 'countries.title_short AS country_title_short')
            ->orderBy('sort_order', 'asc')
            ->get()->toArray();

        $sellers = json_decode(json_encode($sellers), true);

        return $sellers;
    }



    /**
     * The {{ seller:example }} tag.
     *
     * @return string|array
     */
    public function example()
    {
        //
    }

}
