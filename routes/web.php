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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/member', 'MemberController@newMember')->name('new.member');
Route::post('/save-member','MemberController@saveMember')->name('member.save');
Route::get('/division-list','MemberController@getDivision')->name('division.list');
Route::get('/members','MemberController@members')->name('member.list');
Route::get('/delete/{member}','MemberController@delete')->name('member.delete');
Route::get('/member/{member}/edit','MemberController@editMember')->name('member.edit');
Route::post('/update','MemberController@update')->name('member.update');

