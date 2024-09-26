<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/admin/login', 'App\Http\Controllers\admin\authController@login')->middleware('guest:admin');
Route::post('/admin/login', 'App\Http\Controllers\admin\authController@dologin')->name('admin.login');

Route::group(['prefix'=>'/','middleware'=>'auth','namespace' => 'App\Http\Controllers\front'],function(){
    Route::get('/','homePageController@index')->name('front.homePage');
    Route::get('/courses/category/{id}','courseController@showCategory')->name('front.showCategory');
    Route::get('/courses','courseController@courses')->name('front.courses');
    Route::get('/courses/courseDetails/{id}','courseController@courseDetails')->name('front.courseDetails');
    Route::get('/contact','contactController@index')->name('front.contact');
    Route::post('/message/newsletter','MessageController@newsletter')->name('front.message.newsletter');
    Route::post('/message/contact','MessageController@contact')->name('front.message.contact');
    Route::post('/message/enroll','MessageController@enroll')->name('front.message.enroll');
});

Route::group(['prefix'=>'dashboard','middleware'=>'auth:admin','namespace' => 'App\Http\Controllers\admin'],function(){
    Route::get('/','categoryController@index')->name('admin.category.index');
    Route::get('/category','categoryController@index')->name('admin.category.index');
    Route::get('/category/create','categoryController@create')->name('admin.category.create');
    Route::post('/category/store','categoryController@store')->name('admin.category.store');
    Route::get('/category/edit/{id}','categoryController@edit')->name('admin.category.edit');
    Route::post('/category/update','categoryController@update')->name('admin.category.update');
    Route::get('/category/delete/{id}','categoryController@delete')->name('admin.category.delete');

    Route::get('/trainers','trainersController@index')->name('admin.trainers.index');
    Route::get('/trainers/create','trainersController@create')->name('admin.trainers.create');
    Route::post('/trainers/store','trainersController@store')->name('admin.trainers.store');
    Route::get('/trainers/edit/{id}','trainersController@edit')->name('admin.trainers.edit');
    Route::post('/trainers/update','trainersController@update')->name('admin.trainers.update');
    Route::get('/trainers/delete/{id}','trainersController@delete')->name('admin.trainers.delete');

    Route::get('/courses','coursesController@index')->name('admin.courses.index');
    Route::get('/courses/create','coursesController@create')->name('admin.courses.create');
    Route::post('/courses/store','coursesController@store')->name('admin.courses.store');
    Route::get('/courses/edit/{id}','coursesController@edit')->name('admin.courses.edit');
    Route::post('/courses/update','coursesController@update')->name('admin.courses.update');
    Route::get('/courses/delete/{id}','coursesController@delete')->name('admin.courses.delete');

    Route::get('/students','studentsController@index')->name('admin.students.index');
    Route::get('/students/create','studentsController@create')->name('admin.students.create');
    Route::post('/students/store','studentsController@store')->name('admin.students.store');
    Route::get('/students/edit/{id}','studentsController@edit')->name('admin.students.edit');
    Route::post('/students/update','studentsController@update')->name('admin.students.update');
    Route::get('/students/delete/{id}','studentsController@delete')->name('admin.students.delete');
    Route::get('/students/showCourses/{id}','studentsController@showCourses')->name('admin.students.showCourses');

    Route::get('/students/{id}/courses/{c_id}/approve','studentsController@approveCourses')->name('admin.students.approveCourses');
    Route::get('/students/{id}/courses/{c_id}/reject','studentsController@rejectCourses')->name('admin.students.rejectCourses');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
?>

