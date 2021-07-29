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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user/home', 'HomeController@authenticationValidateUser')->name('user.route');



Route::group(['middleware'=>'Admin'],function(){
    Route::get('admin/home', 'HomeController@authenticationValidateAdmin')->name('admin.route');
});
Route::get('sad',function () {
    $rand = rand(0,1);
    $rand1 = rand(0,1);
    $name = ['martina','osama'];
   return $name[$rand] . ' task ' . ($rand1+1);
});
