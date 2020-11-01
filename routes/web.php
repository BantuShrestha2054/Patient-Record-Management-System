<?php
Auth::routes();

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware'=>['auth:web']],function()
{
	Route::get('/','DashboardController@index')->name('dashboard');
	Route::resource('product-category','ProductCategoryController');
	Route::get('/product-categories','ProductCategoryController@index')->name('admin.product-category');

	Route::resource('products','ProductController');
	Route::get('/products','ProductController@index')->name('admin.products');

});

Route::group(['namespace'=>'Admin1', 'prefix'=>'admin1','middleware'=>['auth:web']],function()
{
	Route::get('/','DashController@index')->name('dash');

	Route::resource('department','DepartmentController');
	Route::get('/department','DepartmentController@index')->name('admin1.department');

	Route::resource('patient','PatientController');
	Route::get('/patient','PatientController@index')->name('admin1.patient');

	Route::resource('follow','FollowController');
	Route::get('/follow','FollowController@index')->name('admin1.follow');

});

Route::group(['namespace'=>'Practise', 'prefix'=>'practise'],function()
{
	Route::get('/','PractiseController@index')->name('prac');

	Route::resource('bike','BikeController');
	Route::get('/bike','BikeController@index')->name('practise.bike');
});









Route::get('/','HomeController@index')->name('home');
Route::get('/products','HomeController@productlisting')->name('products');




