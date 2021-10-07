<?php

use App\Http\Controllers\Admin\ContentController;
use App\Http\Controllers\HomeController;
use Illuminate\Routing\RouteGroup;
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

Route::prefix('admin')->name('admin.')->group(function(){

    Route::get('/', function(){
        return redirect()->route('admin.content.index');
    })->name('dashboard');

    Route::resource('content', ContentController::class);

});

Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/browse', [HomeController::class, 'browse'])->name('browse');
