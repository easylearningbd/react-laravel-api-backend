<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CoursesController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');
 
Route::get('/logout',[AdminUserController::class, 'AdminLogout'])->name('admin.logout');


Route::prefix('admin')->group(function(){

Route::get('/user/profile',[AdminUserController::class, 'UserProfile'])->name('user.profile');

Route::get('/user/profile/edit',[AdminUserController::class, 'UserProfileEdit'])->name('user.profile.edit');

Route::post('/user/profile/store',[AdminUserController::class, 'UserProfileStore'])->name('user.profile.store');

Route::get('/change/password',[AdminUserController::class, 'UserChangePassword'])->name('change.password');

Route::post('/change/password/update',[AdminUserController::class, 'UserPasswordUpdate'])->name('change.password.update');

});


 // Information All Routes 
Route::prefix('information')->group(function(){

Route::get('/all',[InformationController::class, 'AllInformation'])->name('all.information');

Route::get('/add',[InformationController::class, 'AddInformation'])->name('add.information');

Route::post('/store',[InformationController::class, 'StoreInformation'])->name('information.store');

Route::get('/edit/{id}',[InformationController::class, 'EditInformation'])->name('edit.information');

Route::post('/update/{id}',[InformationController::class, 'UpdateInformation'])->name('information.update');

Route::get('/delete/{id}',[InformationController::class, 'DeleteInformation'])->name('delete.information'); 

});



 // Services All Routes 
Route::prefix('service')->group(function(){

Route::get('/all',[ServiceController::class, 'AllService'])->name('all.services');

Route::get('/add',[ServiceController::class, 'AddService'])->name('add.services');

Route::post('/store',[ServiceController::class, 'StoreService'])->name('service.store');

Route::get('/edit/{id}',[ServiceController::class, 'EditService'])->name('edit.service');

Route::post('/update/',[ServiceController::class, 'UpdateService'])->name('service.update');

Route::get('/delete/{id}',[ServiceController::class, 'DeleteService'])->name('delete.service'); 

});


 // Project All Routes 
Route::prefix('project')->group(function(){

Route::get('/all',[ProjectController::class, 'AllProject'])->name('all.projects');

Route::get('/add',[ProjectController::class, 'AddProject'])->name('add.projects');

Route::post('/store',[ProjectController::class, 'StoreProject'])->name('project.store');

Route::get('/edit/{id}',[ProjectController::class, 'EditProject'])->name('edit.project');

Route::post('/update/',[ProjectController::class, 'UpdateProject'])->name('project.update');

Route::get('/delete/{id}',[ProjectController::class, 'DeleteProject'])->name('delete.project'); 

});



 // Courses All Routes 
Route::prefix('course')->group(function(){

Route::get('/all',[CoursesController::class, 'AllCourses'])->name('all.courses');

Route::get('/add',[CoursesController::class, 'AddCourses'])->name('add.courses');

Route::post('/store',[ProjectController::class, 'StoreProject'])->name('project.store');

Route::get('/edit/{id}',[ProjectController::class, 'EditProject'])->name('edit.project');

Route::post('/update/',[ProjectController::class, 'UpdateProject'])->name('project.update');

Route::get('/delete/{id}',[ProjectController::class, 'DeleteProject'])->name('delete.project'); 

});