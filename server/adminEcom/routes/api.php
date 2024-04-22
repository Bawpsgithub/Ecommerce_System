<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\HomeSliderController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

//Visitor API
Route::post('/visitor',[VisitorController::class, 'addVisitor']);
Route::get('/visitor',[VisitorController::class,'getAllVisitor']);

//Contact API
Route::post('/contact',[ContactController::class, 'postContactDetail']);
Route::get('/contact',[ContactController::class,'getAllContactDetail']);

//Site Info API
Route::get('/siteinfo',[SiteInfoController::class, 'getAllSiteInfo']);

//Category API
Route::get('/category',[CategoryController::class, 'getCategoryByGroup']);

//Product API
Route::get('/productlistbyremark/{remark}',[ProductListController::class,'getProductListByRemark']);
Route::get('/productlistbycategory/{category}',[ProductListController::class,'getProductListByCategory']);
Route::get('/productlistbysubcategory/{subcategory}',[ProductListController::class,'getProductListBySubCategory']);

//Home Slider API
Route::get('/homeslider',[HomeSliderController::class,'getAllHomeSlider']);