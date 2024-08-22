<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    
    public $fillable = [
        'menu_category_id',
        'code',
        'name',
        'is_active',
        'created_by',
        'updated_by'
    ];

    public function menuCategory() 
    {
        return $this->belongsTo(MenuCategory::class);   
    }
}
