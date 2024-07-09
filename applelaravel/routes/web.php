<?php

use App\Http\Controllers\dangnhapController;
use App\Http\Controllers\dangkyController;
use App\Http\Controllers\detailController;
use App\Http\Controllers\hoadonController;
use App\Http\Controllers\loaiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\sanphamController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\userController;
use App\Models\detail;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/admin',function(){
    return view('admin');
});

// Route::get('/sanpham',function(){
//     return view('Sanpham/show');
// });

// Route::get('/iphone',function(){
//     return view('iphone');
// });

// Route::get('/dathang',function(){
//     return view('dathang');
// });

Route::get('/login',function(){
    return view('Login/login');
});

// Route::get('/dangky',function(){
//     return view('dangky');
// });

// Route::get('/store',function(){
//     return view('store');
// });

// Route::get('/detail',function(){
//     return view('User/detail');
// });

Route::get('/apple',function(){
    return view('apple');
});

// route::get('/danhmuc',function(){
//     return view('danhmuc');
// });

Route::get('/sanpham', [sanphamController::class, 'index'])->name('sanpham.index');
Route::get('/sanpham/create', [sanphamController::class, 'create'])->name('sanpham.create');
Route::post('/sanpham/create', [sanphamController::class, 'store'])->name('sanpham.store');
Route::get('/sanpham/edit/{id}', [sanphamController::class, 'edit'])->name('sanpham.edit');
// Route::get('/sanpham/editLoai/{idLoai}', [sanphamController::class, 'editLoai'])->name('sanpham.editLoai');
Route::post('/sanpham/edit/{id}', [sanphamController::class, 'update'])->name('sanpham.update');
Route::delete('/sanpham/delete/{id}', [sanphamController::class, 'destroy'])->name('sanpham.destroy');
//
Route::get('/loai/{idloai}', [LoaiController::class, 'loai'])->name('loai');
//
Route::get('/store', [storeController::class, 'index'])->name('store.user');
Route::get('/shop-detail/{id}', [detailController::class, 'index'])->name('store.detail');
//
Route::post('/login', [dangnhapController::class, 'login'])->name('login.post');
Route::get('/dangky/create', [dangkyController::class, 'create'])->name('dangky.create');
Route::post('/dangky/create', [dangkyController::class, 'register1'])->name('dangky.register1');
Route::get('/showTaikhoan', [dangkyController::class, 'show'])->name('taikhoan.show');
//
Route::get('/hoadonAdmin', [hoadonController::class, 'showadmin'])->name('hoadon.showadmin');
Route::get('/addhoadon', [hoadonController::class,'addhoadon'])->name('hoadon.add');
Route::get('/hoadonlist', [hoadonController::class,'index'])->name('hoadon.index');
Route::delete('/hoadonlist/delete/{id}', [hoadonController::class, 'destroy'])->name('hoadon.destroy');
// Route::get('/hoadon/{keyid}', [hoadonController::class, 'index'])->name('hoadon.xem');



