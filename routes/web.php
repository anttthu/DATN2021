<?php

use Illuminate\Support\Facades\Auth;
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
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::view('/', 'congdan.layouts.trangchu');

Route::prefix("admin")->middleware(['auth', 'is_staff'])->group(function () {
    Route::view('/', 'admin.index');
    Route::resource('LinhVuc', 'LinhVucController');
    Route::resource('thu-tuc', 'ThuTucController');
    Route::resource('vai-tro', 'RoleController')->middleware('is_admin');
    Route::resource('users', 'UserController');
    Route::resource('cap-thuc-hien', 'CapThucHienController');
    Route::resource('quan-ly-ho-so', 'QuanLyHoSoController');
});

Route::get('tai-khoan', 'TaiKhoanController@edit')->middleware('auth');
Route::post('cap-nhat-tai-khoan', 'TaiKhoanController@update')->middleware('auth');
Route::get('doi-mat-khau', 'TaiKhoanController@chinhSuaMatKhau')->middleware('auth');
Route::post('cap-nhat-mat-khau', 'TaiKhoanController@capNhatMatKhau')->middleware('auth');
Route::get('home', 'HomeController@index')->name('home');
Route::get('tthc', 'TTHCController@index')->name('tthc');
Route::get('tthc/show/{thu_tuc}', 'TTHCController@show')->name('show_tt');
Route::get('GioiThieu', 'HomeController@GioiThieu')->name('congdan.layouts.trangchu');
Route::get('HuongDan', 'HomeController@HuongDan')->name('congdan.layouts.hd');
Route::get('ho-so/{thu_tuc}', 'HoSoController@create')->middleware('auth');
Route::resource('ho-so', 'HoSoController');
Route::get('theo-doi-ho-so', 'HoSoController@theodoi')->middleware('auth');
Route::get('theo-doi-ho-so/{hoso}', 'HoSoController@show')->name('theo-doi-ho-so.show')->middleware('auth');
