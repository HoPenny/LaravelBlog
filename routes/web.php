<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

// Route::get('/', function () {
//     echo 'indexPage';
//     // return view('welcome');
// });
//首頁
Route::get('/', 'App\Http\Controllers\Controller@indexPage');

// //使用者
// Route::group(['prefix' => 'user'], function () {
//     //使用者驗證
//     Route::group(['prefix' => 'auth'], function () {
//         Route::get('/sign-up', 'UserAuthController@signUpPage');
//         Route::post('/sign-up', 'UserAuthController@signUpProcess');
//         Route::get('/sign-in', 'UserAuthController@signInPage');
//         Route::post('/sign-in', 'UserAuthController@signInProcess');
//         Route::get('/sign-out', 'UserAuthController@signOut');
//     });
// });