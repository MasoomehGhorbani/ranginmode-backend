<?php

// app/Models/Product.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'information',
        'images',
        'is_active',
        // 'category_id',
        // 'product_variant_ids',
        'default_variant_index',
        'brand_id',
        'first_variant_final_price',
    ];


    protected $casts = [
        'information' => 'array',
        'images' => 'array',
        // 'category_id' => 'array',
        // 'product_variant_ids' => 'array',
        'is_active' => 'boolean',
    ];


    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_product');
    }


    public function productVariants(): HasMany
    {
        return $this->hasMany(ProductVariant::class);
    }

    public function brand(): BelongsTo
    {
        return $this->belongsTo(Brand::class);
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
