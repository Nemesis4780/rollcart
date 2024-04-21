<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StatamicRadPack\Runway\Routing\Traits\RunwayRoutes;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class ProductVariation extends Model
{
    use HasFactory;
    use HasRunwayResource, RunwayRoutes;

    protected $guarded = ['id'];
    public function product_id() {
        return $this->belongsTo(Product::class, 'id', 'product_id');
    }
}
