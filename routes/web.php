<?php

/*
|--------------------------------------------------------------------------
| Mercurius Routes
|--------------------------------------------------------------------------
|
| This file is where we define Mercurius routes.
|
*/

Route::group([
    'as'         => 'mercurius.',
    'namespace'  => '\AbanNova\Mercurius\Http\Controllers',
    'middleware' => [
        // 'Mercurius',
        'web',
        'auth',
    ],
], function () {

    // Mercurius home
    Route::get('/messages', ['as' => 'home', 'uses' => 'MessagesController@index']);

    // User Profile
    Route::get('/profile/refresh', 'ProfileController@refresh');
    Route::get('/profile/notifications', 'ProfileController@notifications');
    Route::post('/profile', 'ProfileController@update');

    // Conversations
    Route::get('/conversations', 'ConversationsController@index');
    Route::post('/conversations/{receiver}', 'ConversationsController@show');
    Route::delete('/conversations/{receiver}', 'ConversationsController@destroy');

    // Messages
    Route::post('/messages', 'MessagesController@send');
    Route::delete('/messages/{id}', 'MessagesController@destroy');

    // Find Receivers
    Route::post('/receivers', 'ReceiversController@search');

    // Dummy page example
    Route::get('/notification-page-sample', ['as' => 'example', 'uses' => 'PagesController@notificationPageSample']);
});
