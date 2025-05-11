<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

  protected $fillable = [
    'name',
    'brand',
    'silhoutte',
    'colorway',
    'price',
    'thumbnail',
    'release_date',
    'description',
    'category',
    'subcategory',
    'stock'
  ];

  protected function casts(): array
  {
    return [
      'release_date' => 'date',
      'price' => 'integer',
    ];
  }


  /**
   * Get the formatted price.
   */
    public function getFormattedPriceAttribute(): string {
        return '$' . number_format($this->price, 2);
    }

  /**
   * Scope a query to only include in-stock products.
   */
    public function scopeInStock($query) {
        return $query->where('stock', '>', 0);
    }

    public function isInStock(): bool {
        return $this->stock > 0;
    }

  /**
   * Scope a query to filter by category.
   */
    public function scopeByCategory($query, $category) {
        return $query->where('category', $category);
    }

}
