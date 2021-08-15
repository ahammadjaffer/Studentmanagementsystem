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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/tab1', function () {
    return view('student.tab');
});
Route::get("/students","App\Http\Controllers\StudentController@index");
Route::get("/students/create","App\Http\Controllers\StudentController@create");
Route::resource("student","App\Http\Controllers\StudentController");
Route::get("/students/{student}","App\Http\Controllers\StudentController@show");
Route::put("/students/{student}","App\Http\Controllers\StudentController@update");
Route::put("/student/{student}","App\Http\Controllers\StudentController@marksstore");
Route::delete("/students/{student}","App\Http\Controllers\StudentController@destroy");

Route::get("/marks","App\Http\Controllers\StudentController@studentmarkindex");
Route::get("/markscreate","App\Http\Controllers\StudentController@markscreate");
Route::put("/marksstore","App\Http\Controllers\StudentController@marksstore");
Route::get("/marks/{mark}","App\Http\Controllers\StudentController@marksshow");
Route::put("/marksupdate/{mark}","App\Http\Controllers\StudentController@marksupdate");
Route::get("/marksdestroy/{mark}","App\Http\Controllers\StudentController@marksdestroy");


