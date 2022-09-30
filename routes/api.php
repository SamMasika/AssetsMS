<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\API\BrandController;
use App\Http\Controllers\API\StaffController;
use App\Http\Controllers\API\AssetsController;
use App\Http\Controllers\API\VendorController;
use App\Http\Controllers\API\CategoryController;
use App\Http\Controllers\API\DepartmentController;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request){
//     return $request->user();
// });
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', [AuthController::class,'login']);
    Route::post('signup', [AuthController::class,'signup']);

    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', [AuthController::class,'logout']);
        Route::get('user', [AuthController::class,'user']);
       
        Route::resource('brand', BrandController::class);
        Route::resource('department', DepartmentController::class);
        Route::resource('vendor',VendorController::class);
        Route::resource('staff', StaffController::class);
        Route::resource('asset', AssetsController::class);
    });
    Route::resource('category', CategoryController::class);
    
});
