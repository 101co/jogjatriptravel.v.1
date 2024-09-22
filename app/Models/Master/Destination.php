<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = [
        'name',
        'images',
        'is_active',
        'created_by',
        'updated_by'
    ];
}
