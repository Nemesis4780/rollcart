<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use StatamicRadPack\Runway\Traits\HasRunwayResource;
use StatamicRadPack\Runway\Routing\Traits\RunwayRoutes;

class Seller extends Model
{
    use HasFactory;
    use HasRunwayResource, RunwayRoutes;

    protected $fillable = [
        'title',
        'name',
        'street',
        'street_number',
        'zip',
        'place',
        'country_id',
        'logo',
        'catalog_cover',
        'text',
        'phone',
        'fax',
        'email',
        'url',
        'latitude',
        'longitude',
        'is_specialist',
        'is_online_seller',
        'is_catalog_shipper',
    ];
    protected $guarded = ['id'];



    public function country() {
//        return $this->belongsTo(Country::class, 'country', 'title_short');
        return $this->belongsTo(Country::class, 'country_id', 'id');
    }
}
