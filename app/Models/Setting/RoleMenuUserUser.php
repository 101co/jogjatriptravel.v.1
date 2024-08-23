<?php

namespace App\Models\Setting;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleMenuUserUser extends Model
{
    use HasFactory;

    public $fillable = [
        'user_id',
        'is_active',
        'created_by',
        'updated_by'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
