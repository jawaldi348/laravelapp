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
    // return view('welcome');
    return 'Halaman Homepage.<br>Selamat belajar Laravel!';
});

Route::get('about', function() {
	return 'Aplikasi <strong>laravelapp</strong> dibuat sebagai latihan untuk mempelajari Laravel.';
});

// Route::get('halaman-rahasia', ['as' => 'secret', function() {
// 	return 'Anda sedang melihat <strong>Halaman Rahasia.</strong>';
// }]);

Route::get('halamana-rahasia',function() {
	return 'Anda sedang melihat <strong>Halaman Rahasi.</strong>';
})->name('secret');

Route::get('showsecret', function() {
	return redirect()->route('secret');
});
