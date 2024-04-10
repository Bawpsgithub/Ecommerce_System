<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\VisitorController;
use App\Http\Controllers\Admin\ContactController;

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