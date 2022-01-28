<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'price', 'product_categories_id', 'tags'];

    // Relation Gallery One-To-Many

    public function Galleries()
    {
        return $this->hasMany(ProductGallery::class, 'product_id', 'id');
    }

    // Relation Category Many-To-One
    public function Category(){
        return $this->belongsTo(ProductCategory::class, 'product_categories_id', 'id');
    }
}
