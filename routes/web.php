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

Route::get('/', 'QuestionsController@index');

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login.get');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');

Route::group(['middleware' => ['auth']], function () {
    Route::group(['prefix' => 'users/{id}'], function () {
        Route::post('follow', 'UserFollowController@store')->name('user.follow');
        Route::delete('unfollow', 'UserFollowController@destroy')->name('user.unfollow');
    });
    
    Route::get('users/myPage', 'MyPageController@myPage')->name('myPage.myPage');
    Route::delete('users/myPage', 'MyPageController@destroy')->name('myPage.destroy');
        Route::group(['prefix' => 'users/myPage'], function () {
             Route::get('myQuestion', 'QuestionsController@myQuestion')->name('questions.myQuestion');
             Route::get('edit', 'MyPageController@edit')->name('myPage.edit');
             Route::put('update', 'MyPageController@update')->name('myPage.update');
        });
    
    Route::get('users/{id}', 'UsersController@show')->name('users.show');
    Route::resource('questions', 'QuestionsController', ['only' => ['create', 'store', 'show', 'destroy']]);
    Route::get('followings', 'QuestionsController@followings')->name('questions.followings');
    Route::resource('questions/{id}/answers', 'AnswersController', ['only' => ['store', 'destroy']]);
});

