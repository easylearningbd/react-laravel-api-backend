<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminUserController;

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

});

