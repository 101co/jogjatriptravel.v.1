<?php

namespace App\Models\Setting;

use App\Models\Master\Menu;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoleMenuUserMenu extends Model
{
    use HasFactory;

    public $fillable = [
        'menu_id',
        'is_active',
        'created_by',
        'updated_by'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}
