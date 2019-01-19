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

return [
    'login'=>'index/login/index',
    'loginOut'=>'index/login/loginOut',
    'user'=>'index/user/index',
    'userAdd'=>'index/user/add',
    'userUpdate'=>'index/user/update',
    'userDelete'=>'index/user/delete',
    'step'=>'index/step/index',
    'stepAdd'=>'index/step/add',
    'stepUpdate'=>'index/step/update',
    'stepDelete'=>'index/step/delete',
    'rpermission'=>'index/R_permission/index',
    'rpermissionAdd'=>'index/R_permission/add',
    'rpermissionUpdate'=>'index/R_permission/update',
    'rpermissionDelete'=>'index/R_permission/delete',
    'role'=>'index/role/index',
    'roleAdd'=>'index/role/add',
    'roleUpdate'=>'index/role/update',
    'roleDelete'=>'index/role/delete',
    'plan'=>'index/plan/index',
    'planAdd'=>'index/plan/add',
    'planUpdate'=>'index/plan/update',
    'planDelete'=>'index/plan/delete',
    'Permisssion'=>'index/permisssion/index',
    'PermisssionAdd'=>'index/permisssion/add',
    'PermisssionUpdate'=>'index/permisssion/update',
    'PermisssionDelete'=>'index/permisssion/delete',
    'instock'=>'index/in_stock/index',
    'instockAdd'=>'index/in_stock/add',
    'instockUpdate'=>'index/in_stock/update',
    'instockDelete'=>'index/in_stock/delete',

];
