<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'quantity', 'transaction_id', 'product_id'
    ];

    public function Product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
