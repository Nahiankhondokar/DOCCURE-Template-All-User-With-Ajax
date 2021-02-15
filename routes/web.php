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
    return view('welcome');
});

Auth::routes();


/**
 * 
 */

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin_profile', [App\Http\Controllers\HomeController::class, 'profile'])->name('adminprofile');

Route::get('/users', [App\Http\Controllers\HomeController::class, 'users'])->name('users.index');

Route::get('/users_role', [App\Http\Controllers\HomeController::class, 'role'])->name('role.index');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin'])->name('admin.index');

Route::get('/adminAll', [App\Http\Controllers\HomeController::class, 'all'])->name('all');

Route::get('/password_change', [App\Http\Controllers\HomeController::class, 'password_change'])->name('password_change');

Route::patch('/updatePassword', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');


/**
 *  Students Routes
 */
Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'student'], function(){

    Route::post('/store', 'StudentController@store') -> name('student.store');
    Route::get('/all', 'StudentController@all') -> name('student.all');
    Route::get('/profile/{id}', 'StudentController@profile') -> name('student.profile');
    Route::get('/delete/{id}', 'StudentController@delete') -> name('student.delete');
    Route::get('/edit/{id}', 'StudentController@edit') -> name('student.edit');
    Route::patch('/update/{id}', 'StudentController@update') -> name('student.update');

});



/**
 *  Admin Routes
 */

// Route::group(['namespace' => 'App\Http\Controllers', 'prefix' => 'admin'], function(){

//     Route::post('/store', 'StudentController@store') -> name('student.store');

// });
