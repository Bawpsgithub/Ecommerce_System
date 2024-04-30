<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\SiteInfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductListController;
use App\Http\Controllers\Admin\HomeSliderController;
use App\Http\Controllers\Admin\ProductDetailController;
use App\Http\Controllers\Admin\NotificationController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ProductCartController;

use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\ForgetController;
use App\Http\Controllers\User\ResetController;
use App\Http\Controllers\User\UserController;
use App\Models\ProductCart;

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

//Auth API
Route::post('/login', [AuthController::class, 'Login']);
Route::post('/register', [AuthController::class, 'Register']);
Route::post('/forgetpassword', [ForgetController::class, 'ForgetPassword']);
Route::post('/resetpassword', [ResetController::class, 'ResetPassword']);
Route::get('/user', [UserController::class, 'User'])->middleware('auth:api');

//Visitor API
Route::post('/visitor', [VisitorController::class, 'addVisitor']);
Route::get('/visitor', [VisitorController::class, 'getAllVisitor']);

//Contact API
Route::post('/contact', [ContactController::class, 'postContactDetail']);
Route::get('/contact', [ContactController::class, 'getAllContactDetail']);

//Site Info API
Route::get('/siteinfo', [SiteInfoController::class, 'getAllSiteInfo']);

//Category API
Route::get('/category', [CategoryController::class, 'getCategoryByGroup']);

//Product API
Route::get('/productlistbyremark/{remark}', [ProductListController::class, 'getProductListByRemark']);
Route::get('/productlistbycategory/{category}', [ProductListController::class, 'getProductListByCategory']);
Route::get('/productlistbysubcategory/{subcategory}', [ProductListController::class, 'getProductListBySubCategory']);

//Home Slider API
Route::get('/homeslider', [HomeSliderController::class, 'getAllHomeSlider']);

//Product detail API
Route::get('productdetail/{id}', [ProductDetailController::class, 'getProductDetail']);

//Notification API
Route::get('notifications', [NotificationController::class, 'getAllNotification']);

//Search product API
Route::get('/search/{key}', [ProductListController::class, 'getProductBySearch']);

//Similar product API
Route::get('/similar/{subcategory}', [ProductListController::class, 'similarProduct']);

//Review API
Route::get('/reviewlist/{id}',[ReviewController::class, 'reviewList']);

//Product cart API
Route::post('/addtocart',[ProductCartController::class, 'addtoCart']);
Route::get('cartcount/{product_code}',[ProductCartController::class, 'cartCount']);