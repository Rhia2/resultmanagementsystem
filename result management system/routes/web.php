<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// results
Route::get('/results', 'ResultController@index');
Route::get('/results/add', 'ResultController@create');
Route::post('/generate', 'ResultController@generateStd');
Route::get('/results/compute', 'ResultController@compute');
Route::get('/results/view/{id}', 'ResultController@result');
Route::get('/results/edit', 'ResultController@editR');
Route::post('/saveResult', 'ResultController@store');
Route::get('deptResult/{result}', 'ResultController@show');
Route::put('approve','ResultController@updateResult');
Route::put('reject','ResultController@rejectResult');
Route::get('pdfview/{request}',array('as'=>'Result','uses'=>'ResultController@pdfview'));
Route::get('printResult/{request}','ResultController@print');

// user
Route::get('/users', 'UsersController@index');
Route::get('/users/add', 'UsersController@create');
Route::get('/users/profile', 'UsersController@profile');
Route::get('/users/editProfile/{id}', 'UsersController@edit');
Route::post('/addUser', 'UsersController@storeUsers');
Route::put('update/{id}','UsersController@update');

Route::get('/colleges', 'CollegesController@index');
Route::post('/addCollege', 'CollegesController@storeCollege');
Route::get('/staffs', 'CollegesController@staff');
Route::get('/staff/add', 'CollegesController@create');

//departments
Route::get('/departments', 'DepartmentsController@index');
Route::post('/addDepartment', 'DepartmentsController@store');

// transcript
Route::get('/transcripts', 'TranscriptsController@index');
Route::get('/generatedTranscript', 'TranscriptsController@generate');
Route::post('/generatedTranscript', 'TranscriptsController@store');

// students
Route::get('/students-list', 'StudentsController@index');
Route::get('/courseReg', 'StudentsController@course');
Route::get('/students/add', 'StudentsController@create');
Route::post('/students', 'StudentsController@store');

Route::post('/selectSession','StudentsController@preStore');
Route::post('/courseReg','StudentsController@storeStdCourses');

//courses
Route::get('/courses','CourseController@index');
Route::post('/addCourse','CourseController@store');

//reports
Route::get('/reports','ReportsController@index');
Route::get('/reports/create','ReportsController@create');
Route::get('/reports/show','ReportsController@report');
Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
