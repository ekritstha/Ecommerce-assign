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

Auth::routes(['register' => false]);

Route::group([
    'namespace' => 'App\Http\Controllers\Backend',
    'middleware' => ['auth'],
    'prefix' => 'admin',
    'as' => 'admin.'
], function () {
    Route::get('/', 'DashboardController@index')->name('dashboard');
    Route::get('/delivered/{id}', 'OrdersController@orderDelevered')->name('order-delivered');
    foreach (config('menu.menu') as $menu) {
        Route::resource($menu['slug'], str_replace(' ', '', ucwords(str_replace("-", " ", $menu['slug']) . 'Controller')));
    }
});

Route::get('/', 'App\Http\Controllers\Frontend\HomeController@index')->name('index');
Route::get('/products', 'App\Http\Controllers\Frontend\HomeController@products')->name('products');
Route::get('/category/{slug}', 'App\Http\Controllers\Frontend\HomeController@category')->name('category');
Route::get('/product/{slug}', 'App\Http\Controllers\Frontend\HomeController@singleProduct')->name('single-product');
Route::post('/add-to-cart/{id}', 'App\Http\Controllers\Frontend\HomeController@addToCart')->name('addToCart');
Route::get('/cart', 'App\Http\Controllers\Frontend\HomeController@getCart')->name('cart');
Route::get('/checkout', 'App\Http\Controllers\Frontend\HomeController@checkout')->name('checkout');
Route::post('/checkout', 'App\Http\Controllers\Frontend\HomeController@postCheckout')->name('post-checkout');
Route::get('/products/search', 'App\Http\Controllers\Frontend\HomeController@search')->name('search');
