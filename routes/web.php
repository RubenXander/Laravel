<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\UserController;

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

Route::get('/', [PizzaController::class, 'getIndex'])->Name('shop.index');

Route::get('/add-to-cart/{id}', [PizzaController::class, "getAddToCart"])->name("pizza.addToCart");

Route::get('reduce/{id}', [PizzaController::class, 'getReduceByOne'])->name('pizza.reduceByOne');

Route::get('remove/{id}', [PizzaController::class, 'getRemoveItem'])->name('pizza.remove');

Route::get('/shopping-cart', [PizzaController::class, "getCart"])->name("pizza.shoppingCart");

Route::get('/checkout', [PizzaController::class, 'getCheckout'])->name('checkout')->middleware('auth');

Route::post('/checkout', [PizzaController::class, 'postCheckout'])->name('checkout')->middleware('auth');

Route::group(['prefix' => 'user'], function () {

    Route::group(['middleware' => 'guest'], function () {

        Route::get('/signup', [UserController::class, 'getSignup'])->name('user.signup');

        Route::post('/signup', [UserController::class, 'postSignup'])->name('user.signup');

        Route::get('/signin', [UserController::class, 'getSignin'])->name('user.signin');

        Route::post('/signin', [UserController::class, 'postSignin'])->name('user.signin');

    });

    Route::group(['middleware' => 'auth'], function () {

        Route::get('/profile', [UserController::class, 'getProfile'])->name('user.profile');

        Route::get('/logout', [UserController::class, 'getLogout'])->name('user.logout');


    });
});
