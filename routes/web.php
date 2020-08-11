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

// auth
Auth::routes();

Route::get('template', function() {
    return view('emails.welcome');
});


Route::get('/', 'HomeController@index')->name('home');
// get request logout
 Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home.home');
Route::get('/book', 'HomeController@book')->name('home.book-now')->middleware(['auth']);
 
Route::get('cart', 'HomeController@cart')->name('agent.cart');
 
Route::get('add-to-cart/{id}', 'HomeController@addToCart')->name('addToCart');
Route::patch('update-cart', 'HomeController@update')->name('update');;
 
Route::delete('remove-from-cart', 'HomeController@remove');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/checkout', 'CheckoutController@getCheckout')->name('agent.checkout.index');
    Route::post('/checkout/order', 'CheckoutController@placeOrder')->name('placeOrder');
});