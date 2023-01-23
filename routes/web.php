<?php

use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RolesControllers;
use App\Http\Controllers\TypesControllers;
use App\Http\Controllers\UsersControllers;
use Illuminate\Routing\RouteRegistrar;
use Illuminate\Support\Facades\Route;

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
Route::redirect('/', '/home');
Route::get('/qwerty',[DatabaseController::class,'index']);
Route::view('/example', 'welcome');
Route::get('/login', [LoginController::class, 'form'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware(['autentication'])->group(function () {
    Route::get('/home', [HomeController::class,'index']
    )->name('home');
    Route::prefix('/users')->name('users.')->group(function () {
            Route::get('/', [UsersControllers::class, 'index'])->name('index');
            Route::get('/create', [UsersControllers::class, 'create'])->name('create');
            Route::get('/edit/{id}', [UsersControllers::class, 'edit'])->name('edit');
            Route::match(['POST', 'PUT', 'PATCH'],'/{id?}', [UsersControllers::class, 'save'])->name('save');
            Route::delete('/{id}', [UsersControllers::class, 'delete'])->name('delete');
    }
    );
    Route::prefix('/roles')->name('roles.')->group(function () {
            Route::get('/', [RolesControllers::class, 'index'])->name('index');
            Route::middleware('json.request')->any('/get',[RolesControllers::class, 'get'])->name('get');
            Route::get('/create', [RolesControllers::class, 'create'])->name('create');
            Route::get('/edit/{id}', [RolesControllers::class, 'edit'])->name('edit');
            Route::match(['POST', 'PUT', 'PATCH'],'/{id?}', [RolesControllers::class, 'save'])->name('save');
            Route::delete('/{id}', [RolesControllers::class, 'delete'])->name('delete');
    }
    );
    Route::prefix('/types')->name('types.')->group(function () {
        Route::get('/', [TypesControllers::class, 'index'])->name('index');
        Route::get('/create', [TypesControllers::class, 'create'])->name('create');
        Route::get('/edit/{id}', [TypesControllers::class, 'edit'])->name('edit');
        Route::match(['POST', 'PUT', 'PATCH'],'/{id?}', [TypesControllers::class, 'save'])->name('save');
        Route::delete('/{id}', [TypesControllers::class, 'delete'])->name('delete');
}
);


});


