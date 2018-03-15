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

Route::get('/','HomeController@index')->name('home');
Route::get('/solutions','SolutionsController@index')->name('solutions');
Route::get('/solution','SolutionsController@catalog')->name('solutions.catalog');
//Route::get('/catalog',function (){
//    return View('front-end.catalog');
//})->name('catalog');
Route::get('/solutions/{id}','SolutionsController@show')->name('solutions.list');
Route::get('/experience-centre','ExperienceCentreController@index')->name('experience-centre');
Route::get('/experience-centre/{id}','ExperienceCentreController@show')->name('experience-centre.list');
Route::get('/contact','ContactController@index')->name('contact');
Route::post('/contact','ContactController@send')->name('contact.submit');
Route::get('/support','ContactController@supportIndex')->name('support');
Route::post('/support','ContactController@supportSend')->name('support.submit');
Route::get('/news','NewsController@index')->name('news');
Route::get('/news/{id}','NewsController@list')->name('news.list');
Route::get('/channel-partner','ChannelPartnerController@index')->name('channel-partners');
Route::get('/solution-partner','SolutionPartnerController@index')->name('solution-partners');
Route::get('/about-GCR','AboutController@index')->name('about-GCR');
Route::get('/test','testController@index')->name('test');


Auth::routes();
Route::group(['prefix'=>'admin'],function(){ 
	Route::get('/','Admin\LoginController@showLoginForm')->name('admin.login');
	Route::post('/','Admin\LoginController@login')->name('admin.login.submit');
    Route::post('password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('password/reset','Admin\ResetPasswordController@reset');
    Route::get('password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');

	Route::group(['middleware'=>'auth:admin'],function(){
    Route::get('/logout','Admin\LoginController@logout')->name('admin.logout');
    Route::post('/logout','Admin\LoginController@logout')->name('admin.logout.submit');
        Route::get('/experience-form','Admin\VideosController@dynamicForm')->name('experience-form');
        Route::get('/events-form/{id?}','Admin\NewsController@dynamicForm')->name('events-form');
    Route::get('/home', function () {
                return view('admin.dasboardbolt');
            })->name('admin-dashboard');
    Route::group(['middleware'=>'checkPermission'],function(){
        Route::resource('/page','Admin\PageBannerController');
        Route::resource('/country','Admin\CountryController');
        Route::resource('/industry','Admin\IndustryController');
        Route::resource('/product-type','Admin\ProductTypeController');
        Route::resource('/solution-type','Admin\SolutionTypeController');
        Route::resource('/category','Admin\CategoryController');
        Route::resource('/partners','Admin\SolutionPartnerController');
        Route::resource('/providers','Admin\SolutionProviderController');
        Route::resource('/experience-centre','Admin\VideosController');
        Route::resource('/solutions','Admin\ProductController');
        Route::resource('/ads','Admin\AdController');
        Route::resource('/testimonials','Admin\ClientTestimonialController');
        Route::resource('/news','Admin\NewsController');
        Route::resource('/roles','Admin\RoleController');
        Route::resource('/users','Admin\UserController');
        Route::resource('/general','Admin\GeneralController');
        Route::resource('/office','Admin\OfficeController');
        Route::resource('/contact','Admin\ContactController');
        Route::resource('/support','Admin\SupportController');
      });
	});
});

