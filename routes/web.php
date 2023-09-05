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
//Clear configurations:
			Route::get('/config-clear', function() {
				$status = Artisan::call('config:clear');
				return '<h1>Configurations cleared</h1>';
			});

//Clear cache:
			Route::get('/cache-clear', function() {
				$status = Artisan::call('cache:clear');
				return '<h1>Cache cleared</h1>';
			});

//Clear configuration cache:
			Route::get('/config-cache', function() {
				$status = Artisan::call('config:Cache');
				return '<h1>Configurations cache cleared</h1>';
			});


Route::get('/contact-us', function () {
    return view('pages.contact');
});
Route::post('/contact', 'contactController@sendMail');

Route::get('/news', function () {
    return view('pages.news');
});
Route::get('/detailnews/{id}','beritaController@view');
Route::get('/jobvacancy', function () {
    return view('pages.jobvacancy');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/SignUp', function () {
    return view('pages.register');
});

//Route::resource('/', 'posisiController');
//Route::resource('/', 'homeController');

Route::resource('/gallery', 'galeriController');
Route::get('/gallerydetail/{id}', 'galeriController@tampil');




//=========ADMIN================
Route::get('/download/{id}', 'applicantList@tampilPDF');
//============login============
Route::post('/login','loginController@store');
Route::get('/logout','loginController@getLogout');

//=========================

Route::get('/adminweb', function () {
    return view('adminpanel.pages.login');
});
Route::get('/adminhome', function () {
    return view('adminpanel.pages.home');
});
//=======================================Applicant

Route::resource('/adminapplicant', 'applicantList');
Route::get('/EditApplicant/{id}','applicantList@edit');
Route::post('/EditApplicant/update','applicantList@update');


Route::get('/applicant/hapus/{id}','applicantList@hapus');
Route::get('/TambahApplicant','applicantList@tambah');
Route::post('/TambahApplicant/store','applicantList@store');

//=======================================Repeater
Route::get('/adminrepeater', function () {
    return view('adminpanel.pages.repeater');
});
Route::resource('/adminrepeater', 'repeaterController');
Route::get('/detailrepeater/{id}', 'repeaterController@detail');

Route::post('/uploadpassport', 'repeaterController@uploadPass');

Route::get('/closerepeater/{id}', 'repeaterController@Close');


//=======================================testimonial
Route::get('/admintestimonial', function () {
    return view('adminpanel.pages.testimonial');
});
Route::resource('/admintestimonial', 'testiList');
Route::get('/EditTestimonial/{id}','testiList@edit');
Route::post('/EditTestimonial/update','testiList@update');

Route::get('/testimonial/hapus/{id}','testiList@hapus');

//=======================================slider
Route::get('/adminslider', function () {
    return view('adminpanel.pages.slider');
});
Route::resource('/adminslider', 'sliderList');
Route::get('/slider/hapus/{id}','sliderList@hapus');
Route::get('/TambahSlider','sliderList@tambah');
Route::post('/TambahSlider/store','sliderList@store');

//=======================================Galeri

Route::get('/jdlgaleri', function () {
    return view('adminpanel.pages.jdlgaleri');
});

Route::resource('/jdlgaleri', 'jdlgList');
Route::get('/EditJdlg/{id}','jdlgList@edit');
Route::post('/EditJdlg/update','jdlgList@update');
Route::get('/TambahJdlg','jdlgList@tambah');
Route::post('/TambahJdlg/store','jdlgList@store');
Route::get('/jdlgaleri/hapus/{id}','jdlgList@hapus');

Route::resource('/admingaleri', 'galeriList');
Route::get('/galeri/hapus/{id}','galeriList@hapus');
Route::get('/TambahGaleri','galeriList@tambah');
Route::post('/TambahGaleri/store','galeriList@store');

//=======================================posisi
Route::get('/adminposisi', function () {
    return view('adminpanel.pages.posisi');
});
Route::resource('/adminposisi', 'posisiList');
Route::get('/EditPosisi/{id}','posisiList@edit');
Route::post('/EditPosisi/update','posisiList@update');

Route::get('/posisi/hapus/{id}','posisiList@hapus');
Route::get('/TambahPosisi','posisiList@tambah');
Route::post('/TambahPosisi/store','posisiList@store');

Route::get('/department','posisiList@dept');

//======================================berita
Route::get('/adminberita', function () {
    return view('adminpanel.pages.berita');
});
Route::resource('/adminberita', 'newsList');
Route::get('/EditBerita/{id}','newsList@edit');
Route::post('/EditBerita/update','newsList@update');

Route::get('/berita/hapus/{id}','newsList@hapus');
Route::get('/TambahBerita','newsList@tambah');
Route::post('/TambahBerita/store','newsList@store');



//======================================Ship

Route::get('/adminship', function () {
    return view('adminpanel.pages.ship');
});
Route::resource('/adminship', 'shipList');
Route::get('/EditShip/{id}','shipList@edit');
Route::post('/EditShip/update','shipList@update');

Route::get('/ship/hapus/{id}','shipList@hapus');
Route::get('/TambahShip','shipList@tambah');
Route::post('/TambahShip/store','shipList@store');

//======================================Partner

Route::get('/adminpartner', function () {
    return view('adminpanel.pages.partner');
});
Route::resource('/adminpartner', 'partnerList');
Route::get('/EditPartner/{id}','partnerList@edit');
Route::post('/EditPartner/update','partnerList@update');

Route::get('/partner/hapus/{id}','partnerList@hapus');
Route::get('/TambahPartner','partnerList@tambah');
Route::post('/TambahPartner/store','partnerList@store');

//======================================Partner



