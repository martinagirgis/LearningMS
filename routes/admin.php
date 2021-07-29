<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('layouts.admin');
    })->name('admin.dashboard');
#region Useless
    Route::resource('courses','CoursesController');
    Route::resource('slider','SliderController');

    Route::get('modify/dates/{id}','CoursesController@modifyDates')->name('modify.dates');
    Route::post('modify/dates/date','CoursesController@addDate')->name('modify.dates.date');
    Route::post('modify/dates/time','CoursesController@addTime')->name('modify.dates.time');
    Route::get('modify/dates/date/delete/{date_id}','CoursesController@removeDate')->name('modify.dates.date.remove');
    Route::get('modify/dates/time/delete/{time_id}','CoursesController@removeTime')->name('modify.dates.time.remove');
    Route::post('modify/dates/Instructor','CoursesController@setInstructor')->name('modify.dates.setInstructor');

    Route::resource('instructors','Admin\InstructorController');
    Route::resource('users','Admin\UserController');
    Route::resource('blogs','Admin\BlogController');
#endregion
    Route::resource('admins','Admin\AdminsController');
    Route::resource('teachers','Admin\AdminsController');
    Route::resource('groups','Admin\GroupsController');
    Route::get('groups/details/{id}','Admin\GroupsController@details');
    Route::get('groups/details/exam/{id}','Admin\GroupsController@exams')->name('admin.view.exam');


    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

});
