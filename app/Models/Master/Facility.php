<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'is_active',
        'created_by',
        'updated_by'
    ];
}
