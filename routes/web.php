<?php

use App\Controllers\CartController;
use App\Controllers\HomeController;
// use  App\Controllers\admin\HomeController;
use  App\Controllers;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;

use  App\Controllers\OrderController;

use  MvcPhp\Http\Route;


Route::get('home', [HomeController::class, 'index']);

Route::get('dbb', [HomeController::class, 'DBtest']);

Route::post('register', [HomeController::class, 'create']);




Route::get('/admin', [App\Controllers\admin\HomeController::class, 'dash']);
Route::get('/home', [HomeController::class, 'index']);
Route::get('/users', function () {
    return view('admin/users/users');
});

Route::get("/add/new/user", function () {
    return view('register');
});
Route::post('/insertuser', [HomeController::class, 'create']);

Route::get('/logout', [LogoutController::class, 'index']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);


Route::get('/', [HomeController::class, 'index']);
Route::post("/cart/addto", [CartController::class, 'addToCart']);
Route::post("/cart/delete", [CartController::class, 'deleteCartProduct']);
Route::post("/cart/addquantity", [CartController::class, 'plusQuantity']);
Route::post("/cart/minusquantity", [CartController::class, 'minusQuantity']);
Route::post("/order/create", [OrderController::class, 'makeOrder']);
Route::get("/order/get", [OrderController::class, 'index']);
Route::post("/order/filter", [OrderController::class, 'filterOrderByDate']);
Route::post("/order/delete", [OrderController::class, 'cancelOrder']);
Route::post('/search', [HomeController::class, 'search']);


































Route::get('admin', [App\Controllers\admin\HomeController::class, 'dash']);
// ============== user routes =========================
Route::get('/admin/users', [App\Controllers\admin\userController::class, 'index']);
Route::get('/admin/users/add', [App\Controllers\admin\userController::class, 'add']);
Route::post('/admin/users/store', [App\Controllers\admin\userController::class, 'get_add']);
Route::post('/admin/users/delete', [App\Controllers\admin\userController::class, 'delete']);

// ============== products routes =========================
Route::get('/admin/products', [App\Controllers\admin\productsController::class, 'index']);
Route::get('/admin/products/add', [App\Controllers\admin\productsController::class, 'add']);
Route::post('/admin/products/store', [App\Controllers\admin\App\Controllers\admin\productsController::class, 'store']);
Route::post('/admin/products/edite', [App\Controllers\admin\productsController::class, 'edite']);
Route::post('/admin/products/update', [App\Controllers\admin\productsController::class, 'update']);
Route::post('/admin/products/delete', [App\Controllers\admin\productsController::class, 'delete']);


// ============================= Orders routes ====================
Route::get('/admin/orders', [App\Controllers\admin\orderController::class, 'index']);
Route::get('/admin/orders/add', [App\Controllers\admin\orderController::class, 'add']);
Route::get('/admin/orders/store', [App\Controllers\admin\orderController::class, 'store']);
Route::get('/admin/orders/edite', [App\Controllers\admin\orderController::class, 'edite']);
Route::get('/admin/orders/update', [App\Controllers\admin\orderController::class, 'update']);
Route::get('/admin/orders/delete', [App\Controllers\admin\orderController::class, 'delete']);
