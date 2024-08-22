<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuCategory extends Model
{
    use HasFactory;
    
    public $fillable = [
        'initial',
        'name',
        'is_active',
        'created_by',
        'updated_by'
    ];
}
