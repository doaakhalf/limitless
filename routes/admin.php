<?php

/*
|--------------------------------------------------------------------------
| admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::Auth();
    // to return login page
    Route::get('/Loginpage', 'Admin\LoginController@Loginpage')->name('Loginpage');
    Route::post('/submitLogin', 'Admin\LoginController@Login')->name('submitLogin');
    Route::get('logout', 'Admin\LoginController@logout');

    // to return other pages if he auth
    Route::group(['middleware' => 'auth'], function () {

        // return dashboard
        Route::get('/admin', 'Admin\HomeController@index')->name('admin');

    });

    // Route::get('admin/users/destory',function(){
    //     dd('dsds');
    // });

    
// administrator & superadministrator Control Panel Routes
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::resource('users', 'UsersController');
    Route::resource('products', 'ProductController');
    Route::get('admin/users/destory', 'UsersController@destroy');
    Route::resource('permission', 'PermissionController');
    Route::resource('roles', 'RolesController');
});
