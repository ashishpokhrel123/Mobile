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
  return view('pages/index');
 });

 

//routes used for pages 
Route::get('pages/index','PagesController@index');
Route::get('pages/store','PagesController@store');
Route::get('pages/secondhand','PagesController@secondhand');
Route::get('/welcome','PagesController@welcome');
Route::get('pages/userprofile','PagesController@userprofile');
Route::get('pages/editprofile','PagesController@editprofile');
Route::get('pages/editproduct','PagesController@editproduct');
Route::get('pages/additems','PagesController@additems');
Route::get('pages/itemslist','PagesController@itemslist');
Route::get('pages/contact','PagesController@contact');
Route::get('pages/producttype','PagesController@producttype');
Route::get('pages/order','PagesController@order');


//Routes for showing product//
Route::get('/','ProductsController@show');
//routes for user profile update//
Route::get('useredit/{id}','UserController@edit');
Route::put('userupdate/{id}','UserController@update');

//routes for user add items//

Route::put('pages/additems','ItemsController@create');
Route::get('pages/itemslist','ItemsController@index');

//for updating user items list//
Route::get('Itemsedit/{id}','ItemsController@edit');
Route::put('Itemsupdate/{id}','ItemsController@update');

//for delteing user items list//
Route::delete('pages/itemslist/{id}', 'ItemsController@destroy');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//route to get admin dashboard (passed throuh kernal.php) //
Route::get('/adminpanel', 'HomeController@adminpanel')->middleware('admin');

//route to add product types names from admin panel //

Route::put('pages/producttype','ProducttypesController@create');
Route::get('pages/producttype','ProducttypesController@index');

//routes for producttypes update admin//
Route::get('Producttypesedit/{id}','ProducttypesController@edit');
Route::put('Producttypesupdate/{id}','ProducttypesController@update');

//admin to delete producttypes//
Route::delete('pages/producttype/{id}', 'ProducttypesController@destroy');


//route to add product from admin panel //
Route::get('/adminpanel','ProductsController@index');
Route::put('/adminpanel','ProductsController@create');


//admin to delete product//
Route::delete('/adminpanel/{id}', 'ProductsController@destroy');

//routes for product update//
Route::get('Productsedit/{id}','ProductsController@edit');
Route::put('Productsupdate/{id}','ProductsController@update');

//routes for contact//
Route::put('pages/contact','ContactController@create');
Route::get('pages/contact','ContactController@index');