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
    return view('Welcome');
});

Route::get('/login', 'LoginController@index')->name('login.index');
Route::post('/login', ['as'=>'login', 'uses'=>'LoginController@verify']);
Route::get('/logout', ['as'=>'logout', 'uses'=>'LogoutController@index']);
//registration
Route::get('/registration','Registrationcontroller@index')->name('registration.index');
Route::post('/registration','Registrationcontroller@insert')->name('registration.insert');

Route::get('/home','HomeController@index')->name('home.index');                       //admin
Route::get('/userhome','UserhomeController@index')->name('userhome.index');           //normal user
Route::get('/visitorhome','VisitorhomeController@index')->name('visitor.index');      //visitor
//admin profile
Route::get('/home/profile/{id}','HomeController@profile')->name('home.profile'); 
//user profile
Route::get('/userhome/uprofile/{id}','UserhomeController@uprofile')->name('userhome.uprofile');
//delete user
Route::get('/home/delete/{id}','HomeController@delete')->name('home.delete');
Route::post('/home/delete/{id}','HomeController@destroy')->name('home.destroy');
//resview
Route::get('/restudent','Restaudentcontroller@index')->name('restudent.index'); 