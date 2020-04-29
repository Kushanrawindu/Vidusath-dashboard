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

Route::get('/welcome', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');

// ==========================================================

Route::get('/admindashboard', function () {
    return view('admin.adminHome');
});

// Route::get('/admin/school', function () {
//     return view('admin.school.index');
// });




Route::get('/gradesubject', function () {
    return view('frontend.gradeSubject.index');
});
// Route::get('/grade', function () {
//     return view('frontend.grade.index');
// });


Route::get('/getSchools/{id}', 'UserHomeController@getSchool')->name('getSchool');
Route::get('/getData/{id}', 'UserHomeController@getData')->name('getData');



Route::get('/', 'UserHomeController@index');

Route::get('/admin/subject', function () {
    return view('admin.grades.index');
});

Route::get('/admin/regteachers', function () {
    return view('admin.registeredTeachers.index');
});

Route::get('/admin/regstudents', function () {
    return view('admin.registeredStudents.index');
});

Route::get('/userdashboard', function () {
    return view('user.userHome');
});

// Route::get('/user/classwork', function () {
//     return view('user.classwork.index');
// });

Route::get('/user/uploads', function () {
    return view('user.upoladedAssignments.index');
});

// ==========================================================

Route::resource('school', 'SchoolController');

Route::resource('classwork', 'ClassworkController');