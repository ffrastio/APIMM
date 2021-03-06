<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'slug', 'photo'];

    // Relation Product One-To-Many
    public function Products()
    {
        return $this->hasMany(Product::class, 'product_categories_id', 'id');
    }
}
