<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\logincontroller;
use App\Http\Controllers\Admincontroller;

Route::get('/',[ContentController::class,'index']);
//about
Route::get('/About-us',[AboutController::class,'index']);
//service
Route::get('/Services',[ServicesController::class,'index']);
//contact
Route::get('/Contact-us',[ContactController::class,'index']);
Route::post('/Contact-us',[ContactController::class,'store'])->name('/contact');
//account
Route::get('/account',[AccountController::class,'index']);
Route::post('/account',[AccountController::class,'store']);
//register
Route::get('/register',[AccountController::class,'index']);
Route::post('/getstate',[AccountController::class,'store']);
//admin
Route::get('/Admin',[AdminController::class,'index']);
Route::post('/Admin',[AdminController::class,'store']);
//login
Route::get('/loginadmin',[logincontroller::class,'index']);