<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
 
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/home', [App\Http\Controllers\Admin\AdminController::class, 'index'])->name('admin.home');
    /* Start User page */
    Route::get('/admin/user', [App\Http\Controllers\Admin\UserController::class, 'User'])->name('admin.user');
    Route::get('/admin/user/edit/{id}',[App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin.user.edit');
    Route::post('/admin/user/update',[App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');
    Route::delete('/admin/user/delete/{id}',[App\Http\Controllers\Admin\UserController::class,'Delete'])->name('admin.user.delete');
    Route::post('/admin/user/create',[App\Http\Controllers\Admin\UserController::class,'store'])->name('admin.user.create');
    /* End User page */
    /* Start Employee page */
    Route::get('/admin/employee', [App\Http\Controllers\Admin\EmployeeController::class, 'Index'])->name('admin.employee');
    Route::post('/admin/employee/create',[App\Http\Controllers\Admin\EmployeeController::class,'store'])->name('admin.employee.create');
    Route::get('/admin/employee/edit/{id}',[App\Http\Controllers\Admin\EmployeeController::class,'edit'])->name('admin.employee.edit');
    Route::post('/admin/employee/update',[App\Http\Controllers\Admin\EmployeeController::class,'update'])->name('admin.employee.update');
    Route::delete('/admin/employee/delete/{id}',[App\Http\Controllers\Admin\EmployeeController::class,'Delete'])->name('admin.employee.delete');
    /* End Employee page */

    /* Start Employee page */
    Route::get('/admin/supplier', [App\Http\Controllers\Admin\SupplierController::class, 'Index'])->name('admin.supplier');
    Route::post('/admin/supplier/create',[App\Http\Controllers\Admin\SupplierController::class,'store'])->name('admin.supplier.create');
    Route::get('/admin/supplier/edit/{id}',[App\Http\Controllers\Admin\SupplierController::class,'edit'])->name('admin.supplier.edit');
    Route::post('/admin/supplier/update',[App\Http\Controllers\Admin\SupplierController::class,'update'])->name('admin.supplier.update');
    Route::delete('/admin/supplier/delete/{id}',[App\Http\Controllers\Admin\SupplierController::class,'Delete'])->name('admin.supplier.delete');
    /* End Employee page */
    /* Start vehicle page */
    Route::get('/admin/vehicle', [App\Http\Controllers\Admin\VehicleController::class, 'Index'])->name('admin.vehicle');
    Route::post('/admin/vehicle/create',[App\Http\Controllers\Admin\VehicleController::class,'store'])->name('admin.vehicle.create');
    Route::get('/admin/vehicle/edit/{id}',[App\Http\Controllers\Admin\VehicleController::class,'edit'])->name('admin.vehicle.edit');
    Route::post('/admin/vehicle/update',[App\Http\Controllers\Admin\VehicleController::class,'update'])->name('admin.vehicle.update');
    Route::delete('/admin/vehicle/delete/{id}',[App\Http\Controllers\Admin\VehicleController::class,'Delete'])->name('admin.vehicle.delete');
    /* End vehicle page */
    /* Start repair page */
    Route::get('/admin/repair', [App\Http\Controllers\Admin\RepairController::class, 'Index'])->name('admin.repair');
    Route::post('/admin/repair/create',[App\Http\Controllers\Admin\RepairController::class,'store'])->name('admin.repair.create');
    Route::get('/admin/repair/edit/{id}',[App\Http\Controllers\Admin\RepairController::class,'edit'])->name('admin.repair.edit');
    Route::post('/admin/repair/update',[App\Http\Controllers\Admin\RepairController::class,'update'])->name('admin.repair.update');
    Route::delete('/admin/repair/delete/{id}',[App\Http\Controllers\Admin\RepairController::class,'Delete'])->name('admin.repair.delete');
    /* End repair page */
    /* Start inventory page */
    Route::get('/admin/inventory', [App\Http\Controllers\Admin\InventoryController::class, 'Index'])->name('admin.inventory');
    Route::post('/admin/inventory/create',[App\Http\Controllers\Admin\InventoryController::class,'store'])->name('admin.inventory.create');
    Route::get('/admin/inventory/edit/{id}',[App\Http\Controllers\Admin\InventoryController::class,'edit'])->name('admin.inventory.edit');
    Route::post('/admin/inventory/update',[App\Http\Controllers\Admin\InventoryController::class,'update'])->name('admin.inventory.update');
    Route::delete('/admin/inventory/delete/{id}',[App\Http\Controllers\Admin\InventoryController::class,'Delete'])->name('admin.inventory.delete');
    /* End inventory page */


    /* Start Contact page */
    Route::get('/admin/contact', [App\Http\Controllers\Admin\ContactController::class, 'Index'])->name('admin.contact');
    Route::post('/admin/contact/create',[App\Http\Controllers\Admin\ContactController::class,'store'])->name('admin.contact.create');
    Route::get('/admin/contact/edit/{id}',[App\Http\Controllers\Admin\ContactController::class,'edit'])->name('admin.contact.edit');
    Route::post('/admin/contact/update',[App\Http\Controllers\Admin\ContactController::class,'update'])->name('admin.contact.update');
    Route::delete('/admin/contact/delete/{id}',[App\Http\Controllers\Admin\ContactController::class,'Delete'])->name('admin.contact.delete');
    /* End contact page */

    /* Start opinion page */
    Route::get('/admin/opinion', [App\Http\Controllers\Admin\OpinionController::class, 'Index'])->name('admin.opinion');
    Route::post('/admin/opinion/create',[App\Http\Controllers\Admin\OpinionController::class,'store'])->name('admin.opinion.create');
    Route::get('/admin/opinion/edit/{id}',[App\Http\Controllers\Admin\OpinionController::class,'edit'])->name('admin.opinion.edit');
    Route::post('/admin/opinion/update',[App\Http\Controllers\Admin\OpinionController::class,'update'])->name('admin.opinion.update');
    Route::delete('/admin/opinion/delete/{id}',[App\Http\Controllers\Admin\OpinionController::class,'Delete'])->name('admin.opinion.delete');
    /* End opinion page */


  
});


/* Route::get('/home', [HomeController::class, 'index'])->name('home'); */
Route::middleware(['auth'])->group(function () {
    Route::get('/', [App\Http\Controllers\IndexController::class, 'index'])->name('home');
    Route::get('/about', [App\Http\Controllers\IndexController::class, 'about'])->name('about');
    Route::get('/service', [App\Http\Controllers\IndexController::class, 'service'])->name('service');
    Route::get('/contact', [App\Http\Controllers\IndexController::class, 'Contact'])->name('contact');
    Route::get('/map', [App\Http\Controllers\IndexController::class, 'map'])->name('map');
    Route::prefix('pages')->group(function () {
        Route::get('/technicians', [App\Http\Controllers\IndexController::class, 'Technicians'])->name('pages.technicians');
        Route::get('/booking', [App\Http\Controllers\IndexController::class, 'booking'])->name('pages.booking');
        Route::get('/error', [App\Http\Controllers\IndexController::class, 'Error'])->name('pages.error');
        Route::get('/testimonial', [App\Http\Controllers\IndexController::class, 'Testimonial'])->name('pages.testimonial'); 
    });
    Route::post('/addRepair', [App\Http\Controllers\IndexController::class, 'addRepair'])->name('addRepair');
    Route::post('/addOpinion', [App\Http\Controllers\IndexController::class, 'addOpinion'])->name('addOpinion');
    Route::post('/addContact', [App\Http\Controllers\IndexController::class, 'addContact'])->name('addContact');
});



Auth::routes();
/* 
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 
Route::post('/Register1', [App\Http\Controllers\IndexController::class, 'Register'])->name('Register1');*/
Route::post('/Logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
