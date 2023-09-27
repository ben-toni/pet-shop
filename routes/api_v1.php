<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API V1 Routes
|-------------------------------------------------------------------------
*/

//Route::prefix('admin')->group(function () {
//    Route::post('create', []);
//    Route::post('login', []);
//    Route::get('logout', []);
//    Route::get('user-listing', []);
//    Route::put('user-edit/{uuid}', []);
//    Route::delete('user-delete/{uuid}', []);
//});
//
//Route::prefix('user')->group(function () {
//    Route::get('/', []);
//    Route::delete('/', []);
//    Route::get('orders', []);
//    Route::post('create', []);
//    Route::post('forgot-password', []);
//    Route::post('login', []);
//    Route::get('logout', []);
//    Route::post('reset-password-token', []);
//    Route::put('edit', []);
//});
//
//Route::get('/blog', []);
//Route::get('/blog/{uuid}', []);
//Route::get('/promotions', []);
//
//Route::prefix('brand')->group(function () {
//    Route::post('create', []);
//    Route::put('{uuid}', []);
//    Route::delete('{uuid}', []);
//    Route::get('{uuid}', []);
//});
//Route::get('/brands', []);
//
//Route::prefix('category')->group(function () {
//    Route::post('create', []);
//    Route::put('{uuid}', []);
//    Route::delete('{uuid}', []);
//    Route::get('{uuid}', []);
//});
//Route::get('/categories', []);
//
//Route::prefix('order')->group(function () {
//    Route::post('create', []);
//    Route::put('{uuid}', []);
//    Route::delete('{uuid}', []);
//    Route::get('{uuid}', []);
//    Route::get('{uuid}/download', []);
//});
//Route::prefix('orders')->group(function () {
//    Route::get('', []);
//    Route::get('dashboard', []);
//    Route::get('shipment-locator', []);
//});
//
//Route::prefix('order-status')->group(function () {
//    Route::post('create', []);
//    Route::put('{uuid}', []);
//    Route::delete('{uuid}', []);
//    Route::get('{uuid}', []);
//});
//Route::get('/order-statuses', []);
//
//Route::prefix('payments')->group(function () {
//    Route::get('/', []);
//    Route::post('create', []);
//    Route::put('{uuid}', []);
//    Route::delete('{uuid}', []);
//    Route::get('{uuid}', []);
//});
//
//Route::prefix('product')->group(function () {
//    Route::post('create', []);
//    Route::put('{uuid}', []);
//    Route::delete('{uuid}', []);
//    Route::get('{uuid}', []);
//});
//Route::get('/products', []);
//
//Route::prefix('file')->group(function () {
//    Route::post('upload', []);
//    Route::get('{uuid}', []);
//});
