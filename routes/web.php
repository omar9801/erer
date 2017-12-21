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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/courses/add/{name}', function ($name) {
    return 'hi bitch';
});

Route::post('/courses/add', function () {
    return view('add courses');
});
Route::post('/courses/add/{name}', function ($name) {
    return url('add courses');
});
Route::get('/courses/edit/{id}', function () {
    return view('edit courses', compact($id));
});
Route::get('/courses/delet/{id}', function () {
    return view('delet courses', compact($id));
});

Route::get('/traines', function () {
    return view('traines');
});
Route::post('/traines/add', function () {
    return view('add traines');
});
Route::get('/traines/edit/{id}', function ($id) {/courses/{{$posts->posts_id}}/addstu
    return view('edit traines', compact($id));
});*/

Route::get('/', 'MaController@index');
Route::resource('courses', 'Postscontroller');
Route::resource('traines', 'Tearscontroller');

//Route::resources('/traines', 'Macontroller@index');
/*
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
