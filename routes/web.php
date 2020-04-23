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

Route::get('/','InfoController@infod');
// Route::get('/welcome', function () {
//     return view('welcome');
// });
// Route::get('/admin', function () {
//     return view('admin.index');
// });
Route::get('/admin', function () {
return view('auth.login');
});
Route::get('/index', function () {
    return view('admin.index');
});

Route::get('/addarea', function () {
    return view('admin.add_area');
});
Route::get('/word', function () {
    return view('admin.word');
});
Route::get('/district', function () {
    return view('admin.district');
});
Route::get('/villege', function () {
    return view('admin.villege');
});
Route::get('/orga', function () {
    return view('admin.orga');
});
Route::get('/info', 'WordController@viewword1');
Route::get('/votar', function () {
    return view('admin.votar');
});

Route::get('/freedom', function () {
    return view('admin.freedom');
});
Route::get('/rationcard', function () {
    return view('admin.rationcard');
});
Route::get('/cardholder', function () {
    return view('admin.cardholder');
});
Route::get('/taxpay', function () {
    return view('admin.taxpay');
});
Route::get('/allword','WordController@viewword');
Route::get('/allvillege','VillegeController@viewvillege');
Route::get('/allvotar','VotarController@viewvotar');
Route::get('/freedom','VotarController@freedom');
Route::get('/cardholder','VotarController@cardholder');
Route::get('/rationcard/{id}','VotarController@cardview');
Route::get('/allorga','OrgaController@vieworga');
Route::get('/organization','InfoController@viewpage');
Route::get('/deletearea/{id}','InfoController@deletearea');
Route::get('/deleteword/{id}','WordController@deleteword');
Route::get('/deletevillege/{id}','VillegeController@deletevillege');
Route::get('/deleteorga/{id}','OrgaController@deleteorga');

Route::get('/infopreview/{id}','InfoController@infodetails');
Route::post('/search','InfoController@search');

Route::post('/votarinsert','VotarController@votarinsert');
Route::post('/areainsert','AreaController@areainsert');
Route::post('/infoinsert','InfoController@infoinsert');
Route::post('/orgainsert','OrgaController@orgainsert');
Route::post('/wordinsert','WordController@wordinsert');
Route::post('/villegeinsert','VillegeController@villegeinsert');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
