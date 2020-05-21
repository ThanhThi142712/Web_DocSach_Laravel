<?php

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

Route::get('/','Controller_sach@trangchu' )->name('trangchu');

Route::get('chi_tiet/{id_sach}','Controller_sach@chitiet')->name('chitiet');
Route::get('noi_dung','Controller_sach@noi_dung')->name('noi_dung');
Route::get('danh_sach/{id_theloai}','Controller_sach@ds_theoloai')->name('ds_theoloai');
