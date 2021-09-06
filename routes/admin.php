<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

Route::group(['prefix'=>'admin','middleware' => ['auth:admin']],function(){

    Route::get('/','Users\Admin\AdminController@home')->name('admin.dashboard');

    Route::resource('admins','Admin\AdminsController');
    Route::resource('teachers','Admin\TeachersController');
    Route::resource('users','Admin\StudentsController');

    Route::resource('groups','Admin\GroupsController');
    Route::get('groups/details/{id}','Admin\GroupsController@details')->name('groups.details');
    Route::get('groups/details/exam/{id}','Admin\GroupsController@exams')->name('admin.view.exam');

    Route::any('groups/images/add/{uid}/{groupId}','Admin\GroupsController@addImage')->name('groups.image.store');
    Route::any('groups/images/remove','Admin\GroupsController@removeImage')->name('groups.image.remove');
    Route::any('groups/images/test','Admin\GroupsController@test')->name('groups.test');

    Route::any('groups/videos/add/{uid}/{groupId}','Admin\GroupsController@addVideo')->name('groups.video.store');
    Route::any('groups/videos/remove','Admin\GroupsController@removeVideo')->name('groups.video.remove');
    Route::any('groups/videos/test','Admin\GroupsController@testvid')->name('groups.testvid');

    Route::any('groups/files/add/{uid}/{groupId}','Admin\GroupsController@addFile')->name('groups.file.store');
    Route::any('groups/files/remove','Admin\GroupsController@removeFile')->name('groups.file.remove');
    Route::any('groups/files/test','Admin\GroupsController@testfile')->name('groups.testfile');

    Route::any('groups/audios/add/{uid}/{groupId}','Admin\GroupsController@addAudio')->name('groups.audio.store');
    Route::any('groups/audios/remove','Admin\GroupsController@removeAudio')->name('groups.adio.remove');
    Route::any('groups/audios/test','Admin\GroupsController@testAudio')->name('groups.testaudio');

    Route::any('groups/post/share/{id}','Admin\GroupsController@postShare')->name('groups.postSare');
    Route::any('groups/post/delete/{id}','Admin\GroupsController@postDelete')->name('groups.postDelete');

    Route::any('groups/post/sharePost','Admin\GroupsController@ShareToGroup')->name('groups.shareToGroup');

});


Route::group(['prefix'=>'teacher', 'middleware' => 'auth:teacher'],function(){

    Route::get('/','Users\Teacher\TeacherController@home')->name('teacher.dashboard');

    Route::resource('users','Teacher\UsersController');

    Route::resource('groupss','Teacher\TeacherGroupsController');
    Route::get('groups/details/{id}','Teacher\TeacherGroupsController@details')->name('teacher.groups.details');
    Route::get('groups/details/exam/{id}','Teacher\TeacherGroupsController@exams')->name('teacher.view.exam');

    Route::any('groups/images/add/{uid}/{groupId}','Teacher\TeacherGroupsController@addImage')->name('teacher.groups.image.store');
    Route::any('groups/images/remove','Teacher\TeacherGroupsController@removeImage')->name('teacher.groups.image.remove');
    Route::any('groups/images/test','Teacher\TeacherGroupsController@test')->name('teacher.groups.test');

    Route::any('groups/videos/add/{uid}/{groupId}','Teacher\TeacherGroupsController@addVideo')->name('teacher.groups.video.store');
    Route::any('groups/videos/remove','Teacher\TeacherGroupsController@removeVideo')->name('teacher.groups.video.remove');
    Route::any('groups/videos/test','Teacher\TeacherGroupsController@testvid')->name('teacher.groups.testvid');

    Route::any('groups/files/add/{uid}/{groupId}','Teacher\TeacherGroupsController@addFile')->name('teacher.groups.file.store');
    Route::any('groups/files/remove','Teacher\TeacherGroupsController@removeFile')->name('teacher.groups.file.remove');
    Route::any('groups/files/test','Teacher\TeacherGroupsController@testfile')->name('teacher.groups.testfile');

    Route::any('groups/audios/add/{uid}/{groupId}','Teacher\TeacherGroupsController@addAudio')->name('teacher.groups.audio.store');
    Route::any('groups/audios/remove','Teacher\TeacherGroupsController@removeAudio')->name('teacher.groups.adio.remove');
    Route::any('groups/audios/test','Teacher\TeacherGroupsController@testAudio')->name('teacher.groups.testaudio');

    Route::any('groups/post/share/{id}','Teacher\TeacherGroupsController@postShare')->name('teacher.groups.postSare');
    Route::any('groupss/post/delete/{id}','Teacher\TeacherGroupsController@postDelete')->name('teachergroups.postDelete');

    Route::any('groups/post/sharePost','Teacher\TeacherGroupsController@ShareToGroup')->name('teacher.groups.shareToGroup');

});
