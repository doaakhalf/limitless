<?php

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
//     return view('home');
// });

Route::get('/', 'ClientController@index');
Route::get('/clients', 'ClientController@show');
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/services', function () {
    return view('services');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



Route::get('/upload_cv', function () {
    return view('career_upload');
});
Route::get('/product/{id}/{cat_id}','ProductController@getProduct')->name('product');
Route::get('/getproductbyid/{id}','ProductController@getProductsbyid')->name('getproductbyid');
Route::get('/productwebsite/{id}','ProductController@getProductwebsite')->name('productwebsite');
//////////////////////////////////////////

Route::get('/portfolio/{cat_id?}', 'CategoryController@index');

Route::get('/product', function () {
    return view("product"); 
   
});


Route::get('/privacy', function () {
    return view("privacy"); 
   
});
Route::post('/upload', 'FileController@upload');
Route::get('/upload_cv/{id}', 'FileController@upload_cv');
Route::get('/careers', 'CareerController@index');
Route::get('/clear', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return "Cache is cleared";
});