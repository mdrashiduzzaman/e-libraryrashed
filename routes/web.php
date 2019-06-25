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

Route::get('/', 'frontendController@welcome')->name('welcome');
Route::get('blog', 'frontendController@blog')->name('blog');

Route::get('books&media/search', 'frontendController@bookSearch')->name('bookSearch');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('dashboard', 'HomeController@dashboard')->name('dashboard');
Route::get('welcome/content', 'WelcomeContentController@welcomeContent')->name('welcomeContent');


/* user signin*/
Route::get('user/signin', 'frontendController@userSignin')->name('userSignin');


/*new content */
Route::get('add/content', 'NewContentController@addContent')->name('addContent');
Route::post('newContent/insert', 'NewContentController@newContentInsert')->name('newContentInsert');

/*welcome post*/
Route::post('welcome/post', 'WelcomeContentController@welcomepost')->name('welcomepost');

/*category*/
Route::get('content/category', 'CategoryController@category')->name('category');
Route::post('category', 'CategoryController@addCategory')->name('addCategory');
/*blog post */
Route::get('blog/post', 'PostController@blogPost')->name('blogPost');

