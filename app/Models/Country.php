<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use StatamicRadPack\Runway\Traits\HasRunwayResource;
use StatamicRadPack\Runway\Routing\Traits\RunwayRoutes;

class Country extends Model
{
    use HasFactory;
    use HasRunwayResource, RunwayRoutes;

    protected $fillable = [
        'title',
        'title_short',
        'sort_order',
    ];
    protected $guarded = ['id'];

}
