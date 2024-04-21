<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StatamicRadPack\Runway\Routing\Traits\RunwayRoutes;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class ProductCategory extends Model
{
    use HasFactory;
    use HasRunwayResource, RunwayRoutes;

    protected $guarded = ['id'];

    public function subcategories() {
        return $this->hasMany(ProductSubcategory::class, 'category_id', 'id');
    }
}
