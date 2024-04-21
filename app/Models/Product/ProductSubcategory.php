<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StatamicRadPack\Runway\Routing\Traits\RunwayRoutes;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class ProductSubcategory extends Model
{
    use HasFactory;
    use HasRunwayResource, RunwayRoutes;

    protected $guarded = ['id'];
    public function category_id() {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function products() {
        return $this->hasMany(Product::class, 'subcategory_id');
    }
}
