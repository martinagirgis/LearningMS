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

Route::get('/', function () {
    return view('site.index');
})->name('/');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'MokaController@index')->name('home');

Route::group(['middleware'=>'Admin'],function(){
    Route::get('admin/home', 'HomeController@authenticationValidateAdmin')->name('admin.route');
});
Route::get('sad',function () {
    $rand = rand(0,1);
    $rand1 = rand(0,1);
    $name = ['martina','osama'];
   return $name[$rand] . ' task ' . ($rand1+1);
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::any('/checkAuthLogin', 'HomeController@checkAuthLogin')->name('check.auth.login');
Route::any('/adminLogin/{password}/{email}', 'Auth\AdminLoginController@login')->name('admin.login');
Route::any('/teacherLogin/{password}/{email}', 'Auth\TeacherLoginController@login')->name('teacher.login');
Route::any('/userLogin/{password}/{email}', 'Auth\UserLoginController@login')->name('user.login');
