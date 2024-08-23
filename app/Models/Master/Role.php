<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $fillable = [
        'initial',
        'name',
        'description',
        'is_active',
        'created_by',
        'updated_by'
    ];
}
