<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/**
 * Mulai Acara 3
 */

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('user/{id}', fn($id)=> 'Hello ' . $id);

Route::get('post/{post}/comments/{comment}', function ($postId, $commentId) {
    //
});

// Daftar Metode
// Route::get($uri, $callback);
// Route::post($uri, $callback);
// Route::put($uri, $callback);
// Route::patch($uri, $callback);
// Route::delete($uri, $callback);
// Route::options($uri, $callback);

Route::match(['get', 'post'], '/match', fn () => 'hello');

Route::get('search/{search}', fn($search) => $search)->where('search', '.*');

/**
 * Selesai Acara 3
 */
