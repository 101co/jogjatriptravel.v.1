<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('authUserMenu')) 
{
  function authUserMenu($code, $userId) 
  {
    if (auth()->user()->email == 'super.admin@gmail.com')
      return true;
    
    $authMenu = DB::table('role_menu_users')
                  ->join('role_menu_user_menus', 'role_menu_user_menus.role_menu_user_id', '=', 'role_menu_users.id')
                  ->join('menus', 'menus.id', '=', 'role_menu_user_menus.menu_id')
                  ->join('role_menu_user_users', 'role_menu_user_users.role_menu_user_id', '=', 'role_menu_users.id')
                  ->where('menus.code', '=', $code)
                  ->where('role_menu_user_users.user_id', '=', $userId)
                  ->first();

    return $authMenu ? true : false;
  }
}

