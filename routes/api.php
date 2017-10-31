<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/


/*Route::group(['middleware' => 'auth:api'], function (){
    Route::resource('article', 'ArticleController');
    Route::resource('user', 'UserController');
});*/

//Private routes, only for authenticated users
Route::group(array('prefix' => '/v1', 'middleware' => 'auth:api'), function () {
    Route::resource('user', 'UserController');
    Route::get('/me', 'UserController@index');
    Route::resource('article', 'ArticleController');
    Route::resource('category', 'CategoryController');
    Route::resource('comment', 'CommentController');
    Route::resource('profile', 'ProfileController');
    Route::resource('suggestion', 'SuggestionController');
    Route::resource('vote', 'VoteController');
});

//public routes, everyone has access
Route::group(array('prefix' => '/v1'), function (){
    //Articles
    Route::get('/articles', 'ArticleController@index');
    Route::get('/article/{article}', 'ArticleController@show');
    //Categories
    Route::get('/categories', 'CategoryController@index');
    Route::get('/category/{category}', 'CategoryController@show');
    //Comments
    Route::get('/comments/{article_id}', 'CommentController@index');
    //Profile
    Route::get('/profile/{profile}', 'ProfileController@show');
    //Votes
    Route::get('/votes/count/{article_id}', 'VoteController@show');
    //Search
    Route::get('/search/{terms}', 'SearchController@index');
    //Route::resource('search', 'SearchController');
});

