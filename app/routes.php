<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('layouts.index');
});

Route::get('/register', 'UserController@getRegister');
Route::post('/user/register', 'UserController@postRegister');
Route::get('/success/{email}', array('as' => 'registerSuccess' , 'uses' => 'UserController@getRegisterSuccess'));
Route::get('/user/login', 'UserController@getLogin');
Route::post('/user/login', 'UserController@postLogin');
Route::get('/user/logout', 'UserController@getLogout');
Route::get('/rating', 'UserController@getRating');
Route::get('/user/show/{uid}', 'UserController@getProfile');

Route::get('/problem/show/{pid}', 'ProblemController@getProblem')
->where('pid', '[0-9]+');
Route::get('/problemset/{page_num?}', 'ProblemController@getProblemList')
->where('page_num', '[0-9]+');
Route::get('/problem/statistic/{pid}', 'ProblemController@getStatistic')
->where('pid', '[0-9]+');
Route::get('/problem/submit/{pid}', 'ProblemController@getSubmit')
->where('pid', '[0-9]+');
Route::post('/problem/submit/{pid}', 'ProblemController@postSubmit')
->where('pid', '[0-9]+');

Route::get('/contests', 'ContestController@getContestList');
Route::get('/contest/show/{cid}', 'ContestController@showContestProblems')
->where('cid', '[0-9]+');
Route::get('/contest/standing/{cid}', 'ContestController@showContestStanding')
->where('cid', '[0-9]+');
Route::get('/contest/statistic/{cid}', 'ContestController@showContestStatistic')
->where('cid', '[0-9]+');

Route::get('/status', 'SolutionController@getStatus');

Route::get('faq', function()
{
    return View::make('layouts.faq');
});

Route::get('getpassowrd', function()
{
    return Hash::make('root');
});