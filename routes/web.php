<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\RoleController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Admin\ApplyController;
use App\Http\Controllers\Admin\AssetController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\PermissionController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Auth\PermissionRoleController;

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


    Route::get('/',function ()
    {
       return view('auth.login');
    });
    Auth::routes();
    
    

    // Route::group(['namespace' => 'Dashboard', 'middleware' => ['auth:web','checkAdmin'], 'prefix' => 'dashboard'], function () {
Route::middleware(['auth'])->group(function () {
        Route::get('/dashboard',[DashboardController::class,'index']);
        Route::get('/assets-list',[AssetController::class,'index']);
        Route::get('/electronics',[AssetController::class,'electronics']);
        Route::get('/furnitures',[AssetController::class,'furnitures']);
        Route::get('/buildings',[AssetController::class,'buildings']);
        Route::get('/vehicles',[AssetController::class,'vehicles']);
        Route::get('/others',[AssetController::class,'others']);
        Route::get('/assets-list',[AssetController::class,'index']);
        Route::get('/view-asset/{id}',[AssetController::class,'show']);
        Route::get('/getStaffAssigned/{id}',[AssetController::class,'getStaffAssigned']);
        Route::get('/infos/{id}',[AssetController::class,'more']);
        Route::get('/workshop',[AssetController::class,'workshop']);
        Route::get('/repaired',[AssetController::class,'repairedRecords']);
        Route::post('/repair-asset/{id}',[AssetController::class,'repair']);
        Route::get('/create-asset',[AssetController::class,'create']);
        Route::post('/store-asset',[AssetController::class,'store']);
        Route::get('/edit-asset/{id}',[AssetController::class,'edit']);
        Route::post('/update-asset/{id}',[AssetController::class,'update']);
        Route::delete('/delete-asset/{id}',[AssetController::class,'destroy'])->name('delete.asset');
        Route::post('/assets-assign/{id}',[AssetController::class,'assetAssign']);
        Route::get('/assignasset-view/{id}',[AssetController::class,'assignview']);
        Route::get('/unasi-view/{id}',[AssetController::class,'unassignview']);
        Route::post('/unassignasset-view/{id}',[AssetController::class,'assetunAssign']);
        Route::get('/departmentPDF',[DepartmentController::class,'downloadPDF']);
        Route::get('/disposal',[AssetController::class,'disposal']);
        Route::delete('/dis-dele/{id}',[AssetController::class,'destroyDisp'])->name('delete.disposed');
        Route::get('/assets/pdf', [AssetController::class, 'createPDF']);

        //Category
        Route::get('/category-list',[CategoryController::class,'index']);
        Route::get('/create-category',[CategoryController::class,'create']);
        Route::post('/store-category',[CategoryController::class,'store']);
        Route::get('/edit-category/{id}',[CategoryController::class,'edit']);
        Route::post('/update-category/{id}',[CategoryController::class,'update']);
        Route::delete('/delete-category/{id}',[CategoryController::class,'destroy'])->name('delete.category');

        //Brand
        Route::get('/brand-list',[BrandController::class,'index']);
        Route::get('/create-brand',[BrandController::class,'create']);
        Route::post('/store-brand',[BrandController::class,'store']);
        Route::get('/edit-brand/{id}',[BrandController::class,'edit']);
        Route::post('/update-brand/{id}',[BrandController::class,'update']);
        Route::delete('/delete-brand/{id}',[BrandController::class,'destroy'])->name('delete.brand');


        //Vendor
        Route::get('/vendor-list',[VendorController::class,'index']);
        Route::get('/create-vendor',[VendorController::class,'create']);
        Route::post('/store-vendor',[VendorController::class,'store']);
        Route::get('/edit-vendor/{id}',[VendorController::class,'edit']);
        Route::post('/update-vendor/{id}',[VendorController::class,'update']);
        Route::delete('/delete-vendor/{id}',[VendorController::class,'destroy'])->name('delete.vendor');

        //Department
        Route::get('/department-list',[DepartmentController::class,'index']);
        Route::get('/create-department',[DepartmentController::class,'create']);
        Route::get('/view-department/{id}',[DepartmentController::class,'show']);
        Route::post('/store-department',[DepartmentController::class,'store']);
        Route::get('/edit-department/{id}',[DepartmentController::class,'edit']);
        Route::post('/update-department/{id}',[DepartmentController::class,'update']);
        Route::delete('/delete-department/{id}',[DepartmentController::class,'destroy'])->name('delete.department');
        //Staff
        Route::get('/staff-list',[StaffController::class,'index']);
        Route::get('/view-staff/{id}',[StaffController::class,'view']);
        Route::get('/history/{id}',[StaffController::class,'history']);
        Route::get('/create-staff',[StaffController::class,'create']);
        Route::post('/store-staff',[StaffController::class,'store']);
        Route::get('/edit-staff/{id}',[StaffController::class,'edit']);
        Route::post('/update-staff/{id}',[StaffController::class,'update']);
        Route::delete('/delete-staff/{id}',[StaffController::class,'destroy'])->name('delete.staff');
        Route::post('/assign-asset/{id}',[StaffController::class,'assign']);


        // Roles
        Route::get('/rolepermission/{id}', [PermissionRoleController ::class, 'index']);
        Route::get('/createassign/{id}', [PermissionRoleController::class, 'createRolePerm']);
        Route::post('/assign/{id}', [PermissionRoleController::class, 'assignPerm']);
        Route::get('/show/{id}', [PermissionRoleController::class, 'show']);
        Route::get('/role-permissions/{id}', [RoleController ::class, 'rolePermissions']);
        Route::get('/roles-list', [RoleController::class, 'index']);
        Route::get('/create-role', [RoleController::class, 'create']);
        Route::post('/store-role', [RoleController::class, 'store']);
        Route::get('/edit-role/{id}', [RoleController::class, 'edit']);
        Route::post('/update-role/{id}', [RoleController::class, 'update']);
        Route::delete('/delete-role/{id}', [RoleController::class, 'destroy'])->name('delete.role');
        Route::get('/remove-permission/{id}', [RoleController::class, 'removePermission'])->name('remove.permission');
        Route::delete('/roles/{role}/permissions/{permission}', [RoleController::class, 'revokePermission'])->name('roles.permissions.revoke');
 
        //Permissions
        Route::get('/permissions-list', [PermissionController::class, 'index']);
        Route::get('/create-permission', [PermissionController::class, 'create']);
        Route::post('/store-permission', [PermissionController::class, 'store']);
        Route::post('/update-permission/{id}', [PermissionController::class, 'update']);
        Route::get('/edit-permission/{id}', [PermissionController::class, 'edit']);
        Route::delete('/delete-permission/{id}', [PermissionController::class,'destroy'])->name('delete.permission');

        //Users
        Route::get('/users-list/{id?}', [UserController::class, 'index']);
        Route::get('/view-user/{id}', [UserController::class, 'view']);
        Route::delete('/delete-user/{id}', [UserController::class, 'destroy'])->name('delete.user');
        Route::get('/userPerm/{id}', [UserController::class, 'UserPermView']);
        Route::get('/assign-view/{id}', [UserController::class, 'assignview']);
        Route::post('/userrole/{id}', [UserController::class, 'assignRole']);
        Route::get('/users/{id}', [UserController::class, 'destroy']);
        Route::get('/user-role/{id}', [UserController ::class,'userRole']);
        Route::post('/store-user',[UserController::class,'store']);
        Route::get('/change-password', [UserController::class, 'changePassword'])->name('change-password');
        Route::post('/change-password', [UserController::class, 'updatePassword'])->name('update-password');

        //Order
        Route::get('/apply-list', [ApplyController::class, 'index']);
        Route::get('/create/{id}', [ApplyController::class, 'create']);
        Route::post('/apply-store/{id}', [ApplyController::class, 'placeorder'])->name('placeorder');
        Route::get('/view-order/{id}', [ApplyController::class, 'show']);
        Route::post('/approve/{id}', [ApplyController::class, 'approve']);
        Route::post('/reject/{id}', [ApplyController::class, 'reject']);
        Route::post('/reject-maombi/{id}', [ApplyController::class, 'rejectMaombi']);
        Route::post('/unavailable', [ApplyController::class, 'unavailable']);
        Route::get('/request-list', [ApplyController::class, 'maombi']);
        Route::get('/maombi-approval/{id}', [ApplyController::class, 'maombiApp']);
        Route::post('/maombi-process/{id}', [ApplyController::class, 'maombiApprove']);
        Route::delete('/delete-request/{id}', [ApplyController::class, 'destroy'])->name('delete.request');
        Route::delete('/delete-maombi/{id}', [ApplyController::class, 'destroyMaombi'])->name('delete.maombi');
        
}); 
