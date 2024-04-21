<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use StatamicRadPack\Runway\Routing\Traits\RunwayRoutes;
use StatamicRadPack\Runway\Traits\HasRunwayResource;

class Product extends Model
{
    use HasFactory;
    use HasRunwayResource, RunwayRoutes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'subcategory_id',
        'sort_order',
    ];

    protected $guarded = ['id'];

    public function product_variants() {
        return $this->hasMany(ProductVariation::class, 'product_id', 'id');
    }
    public function subcategory_id() {
        return $this->belongsTo(ProductSubcategory::class, 'subcategory_id');
    }
}
