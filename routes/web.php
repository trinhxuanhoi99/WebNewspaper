<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\loaitincontroller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\mycontroller;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\SPController;
use App\Http\Controllers\theloaicontroller;
use App\Http\Controllers\tintuccontroller;
use App\Models\sanpham;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('xoabang',function(){
    // Schema::drop('nguoidung');
    Schema::dropIfExists('TinTuc');
    echo "đã xóa bảng";
});

Route::get('update',function(){
    Schema::table('tintuc',function($table){
        $table->primary('idTinTuc');
    });
});

Route::get('showview',function(){
    return view('layouts/master');
});


Route::group(['prefix'=>'admin'],function(){
    Route::group(['prefix'=>'theloai'],function(){
        Route::get('danhsach',[theloaicontroller::class,'getDS'])->name('getDanhSachTL');

        Route::get('getThem',[theloaicontroller::class,'getThem'])->name('getThem');
        Route::post('postThem',[theloaicontroller::class,'postThem'])->name('postThemTL');

        Route::get('getSua/{idTL}',[theloaicontroller::class,'getSua']);
        Route::post('postSua/{idTL}',[theloaicontroller::class,'postSua'])->name('postSuaTL');

        Route::get('xoa/{id}',[theloaicontroller::class,'getXoa']);
    });

    Route::group(['prefix'=>'loaitin'],function(){
        Route::get('danhsach',[loaitincontroller::class,'getDS'])->name('getDanhSachLT');

        Route::get('getThem',[loaitincontroller::class,'getThem'])->name('getThemLT');
        Route::post('postThem',[loaitincontroller::class,'postThem'])->name('postThemLT');

        Route::get('getSua/{idTL}',[loaitincontroller::class,'getSua']);
        Route::post('postSua/{idTL}',[loaitincontroller::class,'postSua'])->name('postSuaLT');

        Route::get('xoa/{id}',[loaitincontroller::class,'getXoa']);
    });
    Route::group(['prefix'=>'tintuc'],function(){
        Route::get('danhsach',[tintuccontroller::class,'getDS'])->name('getDanhSachTT');

        Route::get('them',[tintuccontroller::class,'getThem'])->name('getThemTT');
        Route::post('them',[tintuccontroller::class,'postThem'])->name('postThemTT');

        Route::get('Sua/{idTT}',[tintuccontroller::class,'getSua'])->name('getSuaTT');
        Route::post('Sua/{idTT}',[tintuccontroller::class,'postSua'])->name('postSuaTT');

        Route::get('xoa/{id}',[tintuccontroller::class,'getXoa'])->name('xoaTT');

    });

});
Route::get('/', [App\Http\Controllers\tintuccontroller::class, 'getDS'])->name('home');



Route::get('/abc/{id}', [App\Http\Controllers\tintuccontroller::class, 'getTypeNews'])->name('abc');
