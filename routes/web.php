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

Route::get('/', function () {
	return redirect('/login');
    #return view('welcome');
});

Auth::routes();
#Route::get('', 'LoginController@index')->name('');
$controller='';
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create', 'UssdsController@create')->name('create');
Route::get('/create', 'UssdsController@create')->name('create');
Route::get('/ussds/{ussds}', 'UssdsController@show');
Route::get('/ussd-submit', $controller . 'UssdsController@store');
Route::get('/ussds', 'UssdsController@index')->name('ussds');
#Route::get('/ussds', 'UssdsController@update')->name('update');#-- Update page
#Route::get('/ussds', 'UssdsController@destroy')->name('destroy');#--DELETE Page

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/contact', 'ContactController@index')->name('contact');
Route::get('/form-submit', 'ContactController@index')->name('contact');
Route::get('form-submit', $controller . 'ContactController@store');

#Route::get('/create', 'ProfileController@checkstatus')->name('create');
Route::resource('/posts', 'PostsController');

Route::get('users', function () {
    $users = App\User::paginate(15);

    $users->withPath('/user');

    //
});
/*Route::get('form', function(){
 //render app/views/form.blade.php
 return View::make('form');
});*/
Route::post('ussd-submit', array('before'=>'csrf',function(){
    //form validation come here
   }));
Route::post('form-submit', array('before'=>'csrf',function(){
 //form validation come here
}));
