<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ssd extends Model
{
    use HasFactory;

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'sku',
    ];
}
