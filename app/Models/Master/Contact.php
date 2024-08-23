<?php

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
        'alias',
        'phone',
        'is_contact_person',
        'is_active',
        'created_by',
        'updated_by'
    ];
}
