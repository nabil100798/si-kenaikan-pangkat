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
    return redirect()->route('login');
});

Auth::routes();
Route::get('/users','HomeController@users');

Route::get('/pak', 'HomeController@getunsur');
Route::get('getsubunsur','HomeController@getsubunsur' );
Route::get('getsubbidang','HomeController@getsubbidang' );
Route::get('getangkakredit', 'HomeController@getangkakredit');
Route::post('getpengajuan','Pengajuan@update' );
Route::get('/table', function()
{
  return view('table');
});
Route::get('/user', function()
{
  return view('user');
});
Route::get('/input/angkakredit', 'AngkaKreditController@index')->name('angkakredit');
//Route::get('/metu', 'HomeController@logout')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>'auth'], function () {

	Route::get('permissions-all-users',['middleware'=>'check-permission:user|admin|superadmin','uses'=>'HomeController@allUsers']);

	Route::get('permissions-admin-superadmin',['middleware'=>'check-permission:admin|superadmin','uses'=>'HomeController@adminSuperadmin']);

	Route::get('permissions-superadmin',['middleware'=>'check-permission:superadmin','uses'=>'HomeController@superadmin']);

});
Route::get('/tabel2', function () {
    return view('tabel2');
});
Route::resource('pengajuan', 'Pengajuan');

// Route::get('/pengajuan', 'DosenController@pengajuan');
// Route::post('postpengajuan', 'DosenController@postpengajuan')->name('pengajuan');
