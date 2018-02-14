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
});


Route::get('test-find', function (\Doctrine\ORM\EntityManagerInterface $em) {
    /* @var \TodoList\Entities\Task $task */
    $task = $em->find(App\Entities\User::class, 1);

    return $task->getName() . ' - ' . $task->get();
});
Route::get('a/login', function() {
    return view('login');
});

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
    Route::get('/home', function () {
                return view('admin.dasboardbolt');
            });
    Route::resource('/page','Admin\PageBannerController');
    Route::resource('/country','Admin\CountryController');
    Route::resource('/industry','Admin\IndustryController');
    Route::resource('/product-type','Admin\ProductTypeController');
    Route::resource('/solution-type','Admin\SolutionTypeController');
    Route::resource('/category','Admin\CategoryController');
    Route::resource('/partners','Admin\SolutionPartnerController');
    Route::resource('/experience-centre','Admin\VideosController');
    Route::get('/experience-form',function(){
        return view('admin.Form.experienceForm');
    })->name('experience-form');
	});
});

Route::get('/home', 'HomeController@index')->name('home');
