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

use think\Route;
// index
Route::get('index', 'index/index/index');
Route::get('welcome','index/index/welcome');


// 用户类
Route::get('User/showBank','index/User/showBank');
Route::get('User/list','index/User/showUser');
Route::get('addUser','index/User/addUserView');
Route::get('request','index/User/requestCash');
Route::get('requestR','index/User/requestRecharge');
Route::get('cashlist','index/User/cashList');
Route::get('betlist','index/user/showBet');



//系统设置
Route::get('System/index','index/System/index');
Route::get('System/news','index/System/newsView');
Route::get('System/previewNews','index/System/previewNews');
Route::get('System/bank','index/System/previewBank');
Route::get('System/bankEdit','index/System/bankEdit');
Route::get('System/gameList','index/System/gameList');
Route::post('System/updateData','index/System/updateData');