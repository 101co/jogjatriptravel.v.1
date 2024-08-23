<?php

namespace App\Models\Setting;

use App\Models\Master\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleMenuUser extends Model
{
    use HasFactory;

    public $fillable = [
        'role_id',
        'is_active',
        'created_by',
        'updated_by'
    ];

    public function role() 
    {
        return $this->belongsTo(Role::class);   
    }

    public function roleMenuUserMenu()
    {
        return $this->hasMany(RoleMenuUserMenu::class);
    }

    public function roleMenuUserUser()
    {
        return $this->hasMany(RoleMenuUserUser::class);
    }
}
