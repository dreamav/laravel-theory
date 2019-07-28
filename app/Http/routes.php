<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', ['as'=>'home',function () {
    return view('welcome');
}]);

Route::get('/article/{id}', ['as'=>'article',function ($id) {
   echo $id;
}]);

Route::get('/page/{cat}/{id}',function($var1,$var2) {
	
	echo '<pre>';
	
	echo $var1;
	print_r($_ENV);
	echo config('app.locale');
	echo Config::set('app.locale','ru');
	echo Config::get('app.locale');
	echo env('APP_ENV');
	
	echo '</pre>';
	
})/*->where(['id'=>'[0-9]+','cat'=>'[A-Za-z]+'])*/;

/*Route::post('/comments',function () {
	
	print_r($_POST);
	
});*/

/*
Route::match(['get','post'],'/comments',function () {
	
	print_r($_POST);
	
});*/

/*Route::any('/comments',function () {
	
	print_r($_POST);
	
});*/

Route::post('/comments',function () {
	
	print_r($_POST);
	
});



Route::group(['prefix'=>'admin/{id}'],function() {
	
	
	Route::get('page/create/{var}',function($id) {
		
		$route = Route::current();
		
		//echo $route->getName();
		//echo $route->getParameter('var',24);
		print_r($route->parameters());
		
		//return redirect()->route('article',array('id'=>25));
	})->name('createpage');
	
	Route::get('page/edit',function() {
		echo 'page/edit';
	});
	

});


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
