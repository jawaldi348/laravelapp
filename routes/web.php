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
	return view('pages.homepage');
});

Route::get('about', function () {
	return view('pages.about');
});

Route::get('siswa', function () {
	$siswa = ['Rasmus Lerdorf', 'Taylor Otwell', 'Brendan Eich', 'John Resig'];
	// return view('siswa.index', compact('siswa'));
	return view('siswa.index')->with('siswa', $siswa);
});
