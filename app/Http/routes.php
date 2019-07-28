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

Route::get('/about/{id}','FirstController@show');


Route::get('/articles',['uses'=>'Admin\Core@getArticles','as'=>'articles']);
Route::get('/article/{id}',['uses'=>'Admin\Core@getArticle','as'=>'article']);


//list pages
//Route::get('pages/add','Admin\CoreResource@add');
//Route::resource('/pages','Admin\CoreResource',['except'=>['index','show']]);//pages.index  pages.store


Route::controller('/pages','PagesController',['getCreate'=>'pages.create']);

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
