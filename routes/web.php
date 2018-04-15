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
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**********************************************[Admin Area-(start)]*************************************************/
Route::group(['middleware' => ['auth.message', 'admin']], function()
{

    /**********************************************[Doctor]**********************************************************/
    Route::get('/admin/doctor/addnew','DoctorController@addnewform')->name('adddoctorform');
    Route::post('/admin/doctor/addnew','DoctorController@addnew')->name('adddoctor');

});
/**********************************************[Admin Area-(end)]****************************************************/
