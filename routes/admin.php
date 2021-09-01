<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', function () {
        return view('layouts.admin');
    })->name('admin.dashboard');

    Route::resource('admins','Admin\AdminsController');
    Route::resource('teachers','Admin\TeachersController');
    Route::resource('users','Admin\StudentsController');

    Route::resource('groups','Admin\GroupsController');
    Route::get('groups/details/{id}','Admin\GroupsController@details');
    Route::get('groups/details/exam/{id}','Admin\GroupsController@exams')->name('admin.view.exam');

    Route::any('groups/images/add/{uid}','Admin\GroupsController@addImage')->name('groups.image.store');
    Route::any('groups/images/remove','Admin\GroupsController@removeImage')->name('groups.image.remove');
    Route::any('groups/images/test','Admin\GroupsController@test')->name('groups.test');

    Route::any('groups/videos/add/{uid}','Admin\GroupsController@addVideo')->name('groups.video.store');
    Route::any('groups/videos/remove','Admin\GroupsController@removeVideo')->name('groups.video.remove');
    Route::any('groups/videos/test','Admin\GroupsController@testvid')->name('groups.testvid');

    Route::any('groups/files/add/{uid}','Admin\GroupsController@addFile')->name('groups.file.store');
    Route::any('groups/files/remove','Admin\GroupsController@removeFile')->name('groups.file.remove');
    Route::any('groups/files/test','Admin\GroupsController@testfile')->name('groups.testfile');

    Route::any('groups/audios/add/{uid}','Admin\GroupsController@addAudio')->name('groups.audio.store');
    Route::any('groups/audios/remove','Admin\GroupsController@removeAudio')->name('groups.adio.remove');
    Route::any('groups/audios/test','Admin\GroupsController@testAudio')->name('groups.testaudio');


    // Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    // Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    // Route::get('/register', 'Auth\RegisterController@showRegisterForm')->name('admin.register');
    // Route::post('/register', 'Auth\RegisterController@register')->name('admin.register.submit');

});
