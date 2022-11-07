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

Route::get('/',[\App\Http\Controllers\PageController::class, 'welcome'])->name('welcome');

//reg
Route::get('/reg', [\App\Http\Controllers\PageController::class, 'RegPage'])->name('RegPage');
Route::post('/reg', [\App\Http\Controllers\UserController::class, 'regist'])->name('regist');

//auth
Route::get('/auth', [\App\Http\Controllers\PageController::class, 'AuthPage'])->name('AuthPage');
Route::post('/auth', [\App\Http\Controllers\UserController::class,'authorization'])->name('authorization');

//выход
Route::get('/logout', [\App\Http\Controllers\UserController::class, 'logout'])->name('logout');

//админка
Route::get('/admin', [\App\Http\Controllers\PageController::class, 'admin'])->name('admin');

//категории
Route::get('/category/add',[\App\Http\Controllers\PageController::class, 'category'])->name('category');
Route::post('/category/add',[\App\Http\Controllers\CategoryController::class,'create'])->name('create');
Route::get('/category/edit/{category}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('editCategory');
Route::put('/category/edit/save/{category}',[\App\Http\Controllers\CategoryController::class, 'update'])->name('CategoryEditSave');
Route::delete('/admin/delete/{category}',[\App\Http\Controllers\CategoryController::class,'destroy'])->name('delete');

//контент
Route::get('/content', [\App\Http\Controllers\PageController::class, 'content'])->name('content');
Route::post('/create_content',[\App\Http\Controllers\ContentController::class, 'create'])->name('createContent');
Route::get('/edit_content/{content}', [\App\Http\Controllers\ContentController::class, 'edit'])->name('editContent');
Route::put('/edit_content/save/{content}', [\App\Http\Controllers\ContentController::class, 'update'])->name('ContentEditSave');
Route::delete('/admin/delete/{content}', [\App\Http\Controllers\ContentController::class, 'destroy'])->name('deleteContent');
