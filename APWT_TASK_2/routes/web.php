<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::get('/myprofile',[HomeController::class,'product'])->name('product');
Route::get('/teams',[HomeController::class,'teams'])->name('teams');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/registration',[HomeController::class,'reg'])->name('reg');
Route::get('/ProductsList',[HomeController::class,'Pro_list'])->name('Pro_list');
Route::get('/AgentList/Agent/{name}/{id}/{dob}',[HomeController::class,'AgentList'])->name('Agent');
Route::get('/productlist/Product/{name}/{id}/{dob}',[HomeController::class,'productlist'])->name('ProductList');
