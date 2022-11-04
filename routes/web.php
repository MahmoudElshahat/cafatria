<?php

use App\Controllers\CartController;
use App\Controllers\HomeController;
// use  App\Controllers\admin\HomeController;
use  App\Controllers;
use App\Controllers\controller;
use App\Controllers\LoginController;
use App\Controllers\LogoutController;

use  App\Controllers\OrderController;
use App\Controllers\SearchController;
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
Route::get("/order/delete", [OrderController::class, 'cancelOrder']);
Route::post('/search', [SearchController::class, 'search']);



































Route::get('admin', [App\Controllers\admin\HomeController::class, 'dash']);
// ============== user routes =========================
Route::get('/admin/users', [App\Controllers\admin\userController::class, 'index']);
Route::get('/admin/users/add', [App\Controllers\admin\userController::class, 'add']);
Route::post('/admin/users/store', [App\Controllers\admin\userController::class, 'store']);
Route::post('/admin/users/delete', [App\Controllers\admin\userController::class, 'delete']);

// ============== products routes =========================
Route::get('/admin/products', [App\Controllers\admin\productsController::class, 'index']);
Route::get('/admin/products/add', [App\Controllers\admin\productsController::class, 'add']);
Route::post('/admin/products/store', [App\Controllers\admin\productsController::class, 'store']);
Route::get('/admin/products/edit', [App\Controllers\admin\productsController::class, 'edit']);
Route::post('/admin/products/update', [App\Controllers\admin\productsController::class, 'update']);
Route::get('/admin/products/delete', [App\Controllers\admin\productsController::class, 'delete']);


// ============================= Orders routes ====================
Route::get('/admin/orders', [App\Controllers\admin\orderController::class, 'index']);
Route::get('/admin/orders/add', [App\Controllers\admin\orderController::class, 'add']);
Route::get('/admin/orders/store', [App\Controllers\admin\orderController::class, 'store']);
Route::get('/admin/orders/edite', [App\Controllers\admin\orderController::class, 'edite']);
Route::get('/admin/orders/update', [App\Controllers\admin\orderController::class, 'update']);
Route::get('/admin/orders/delete', [App\Controllers\admin\orderController::class, 'delete']);
Route::get('/admin/orders/cancle', [App\Controllers\admin\orderController::class, 'cancle']);
Route::get('/admin/orders/delevery', [App\Controllers\admin\orderController::class, 'to_delvery']);
Route::get('/admin/orders/done', [App\Controllers\admin\orderController::class, 'done']);
Route::post('/admin/orders/userorder', [App\Controllers\admin\orderController::class, 'userOrder']);




// ============== categories routes =========================
Route::get('/admin/categories', [App\Controllers\admin\categoriesController::class, 'index']);
Route::get('/admin/categories/add', [App\Controllers\admin\categoriesController::class, 'add']);
Route::post('/admin/categories/store', [App\Controllers\admin\categoriesController::class, 'store']);
Route::get('/admin/categories/edit', [App\Controllers\admin\categoriesController::class, 'edit']);
Route::post('/admin/categories/update', [App\Controllers\admin\categoriesController::class, 'update']);
Route::get('/admin/categories/delete', [App\Controllers\admin\categoriesController::class, 'delete']);



Route::get('/admin/orderDetails', [App\Controllers\admin\orderController::class, 'showOrderDEtails']);

// ===================== Checks =====================================
Route::get('/admin/checks', [App\Controllers\admin\checkController::class, 'index']);
Route::post('/admin/userchecks', [App\Controllers\admin\checkController::class, 'get_check']);
Route::get('/admin/checkDetails', [App\Controllers\admin\checkController::class, 'showOrderDEtails']);
Route::get('/admin/search', [HomeController::class, 'search']);