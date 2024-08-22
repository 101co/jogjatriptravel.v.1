<?php

use Illuminate\Support\Facades\DB;

if (! function_exists('authUserMenu')) 
{
  function authUserMenu($code, $userId) 
  {
    // $authMenu = DB::table('role_menus')
    //               ->join('role_menu_details', 'role_menu_details.role_menu_id', '=', 'role_menus.id')
    //               ->join('menus', 'menus.id', '=', 'role_menu_details.menu_id')
    //               ->join('role_menu_users', 'role_menu_users.role_menu_id', '=', 'role_menus.id')
    //               ->where('menus.code', '=', $code)
    //               ->where('role_menu_users.user_id', '=', $userId)
    //               ->first();

    $authMenu = true;

    return $authMenu ? true : false;
  }
}

