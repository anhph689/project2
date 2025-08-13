<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\ProductController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\AuthenticationController;

//http://127.0.0.1:8000/ base url
//GET, POST, PUT, PATCH, DELETE (method http)
Route::get('/', function(){
    echo 'Trang chủ';
});

// Route::get('test', function(){
//     echo "abc";
// });

//Điều hướng qua action của controller
//php artisan make:controller TenController
//Route::get('list-product', [ProductController::class, 'showProduct']);

//Gửi dữ liệu qua controller
//Slug
//http://127.0.0.1:8000/get-product/4
//Route::get('get-product/{id}/{name?}', [ProductController::class, 'getProduct']);

//Params
//http://127.0.0.1:8000/update-product?id=4&name=iphone
//Route::get('update-product', [ProductController::class, 'updateProduct']);

//http://127.0.0.1:8000/users/create-user
//http://127.0.0.1:8000/users/update-user
//http://127.0.0.1:8000/users/detail-user
//http://127.0.0.1:8000/users/delete-user
//http://127.0.0.1:8000/users/*
// Route::group(['prefix' => 'users', 'as' => 'users.'], function(){
//     Route::get('list-users', [UserController::class, 'listUsers'])->name('listUsers');
//     Route::get('add-users', [UserController::class, 'addUsers'])->name('addUsers');
//     Route::post('add-users', [UserController::class, 'addPostUsers'])->name('addPostUsers');
//     Route::get('delete-users/{userId}', [UserController::class, 'deleteUsers'])->name('deleteUsers');
//     Route::get('update-users/{userId}', [UserController::class, 'updateUsers'])->name('updateUsers');
//     Route::post('update-users', [UserController::class, 'updatePostUsers'])->name('updatePostUsers');
// });

// Route::get('test', function(){
//     return view('test')->with([
//         'var1' => '1',
//         'var2' => [
//             'Apple', 'Orange','Mango'
//         ]
//     ]);
// });

// Route::get('test2', function(){
//     return view('admin.products.list-product');
// });

// Route::get('test3', function(){
//     return view('admin.products.add-product');
// });

Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('post-login', [AuthenticationController::class, 'postLogin'])->name('postLogin');

Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');

//http://127.0.0.1:8000/admin/products/*
//CRUD product
//Route => Controller => Model
//Controller => View list, add, update, detail
Route::group([
    'prefix' => 'admin',
    'as' => 'admin.'
], function(){
    Route::group([
        'prefix' => 'products',
        'as' => 'products.'
    ], function(){
        //CRUD product (list, add, update, detail, delete) => restful API
        Route::get('/', [ProductController::class, 'listProduct'])->name('listProduct');
        Route::get('add-product', [ProductController::class, 'addProduct'])->name('addProduct');
        Route::post('add-product', [ProductController::class, 'addPostProduct'])->name('addPostProduct');
        Route::delete('delete-product', [ProductController::class, 'deleteProduct'])->name('deleteProduct');
        Route::get('detail-product/{idProduct}', [ProductController::class, 'detailProduct'])->name('detailProduct');
        Route::get('update-product/{idProduct}', [ProductController::class, 'updateProduct'])->name('updateProduct');
        Route::patch('update-product/{idProduct}', [ProductController::class, 'updatePatchProduct'])->name('updatePatchProduct');
    });
});
