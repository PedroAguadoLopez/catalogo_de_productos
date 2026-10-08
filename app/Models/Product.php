<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // Campos que se pueden rellenar con create() / fill()
    protected $fillable = [
        'name',
        'slug',
        'description',
        'price',
        'stock',
        'category',
        'image',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'stock' => 'integer',
    ];

    // Precio formateado para mostrarlo en la vista: 12,50 €
    public function getFormattedPriceAttribute(): string
    {
        return number_format($this->price, 2, ',', '.') . ' €';
    }
}