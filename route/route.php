<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::get('hello/:name', 'index/hello');

Route::any('login', 'index/login/index')->allowCrossDomain();

Route::any('loginOut', 'index/login/loginOut')->allowCrossDomain();

Route::any('user', 'index/user/index')->allowCrossDomain();

Route::any('userAdd', 'index/user/add')->allowCrossDomain();

Route::any('userUpdate', 'index/user/update')->allowCrossDomain();

Route::any('userDelete', 'index/user/delete')->allowCrossDomain();

Route::any('step', 'index/step/index')->allowCrossDomain();

Route::any('stepAdd', 'index/step/add')->allowCrossDomain();

Route::any('stepUpdate', 'index/step/update')->allowCrossDomain();

Route::any('stepDelete', 'index/step/delete')->allowCrossDomain();

Route::any('rpermission', 'index/R_permission/index')->allowCrossDomain();

Route::any('rpermissionAdd', 'index/R_permission/add')->allowCrossDomain();

Route::any('rpermissionUpdate', 'index/R_permission/update')->allowCrossDomain();

Route::any('rpermissionDelete', 'index/R_permission/delete')->allowCrossDomain();

Route::any('role', 'index/role/index')->allowCrossDomain();
Route::any('roleUpdate', 'index/role/update')->allowCrossDomain();
Route::any('roleDelete', 'index//role/delete')->allowCrossDomain();
Route::any('roleAdd', 'index/role/add')->allowCrossDomain();

Route::any('plan', 'index/plan/index')->allowCrossDomain();
Route::any('planAdd', 'index/plan/add')->allowCrossDomain();
Route::any('planUpdate', 'index/plan/update')->allowCrossDomain();
Route::any('planDelete', 'index/plan/delete')->allowCrossDomain();

Route::any('permission', 'index/permission/index')->allowCrossDomain();
Route::any('permissionAdd', 'index/permission/add')->allowCrossDomain();
Route::any('permissionUpdate', 'index/permission/update')->allowCrossDomain();
Route::any('permissionDelete', 'index/permission/delete')->allowCrossDomain();

Route::any('instock', 'index/in_stock/index')->allowCrossDomain();
Route::any('instockAdd', 'index/in_stock/add')->allowCrossDomain();
Route::any('instockUpdate', 'index/in_stock/update')->allowCrossDomain();
Route::any('instockDelete', 'index/in_stock/delete')->allowCrossDomain();


return [

];
