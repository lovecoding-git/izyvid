<?php

use Illuminate\Support\Facades\Route;

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
    return view('events.index');
});
Route::get('/events/create', function () {
    return view('events.create1');
});
Route::get('/events/{id}/edit', function ($id) {
    $event = \App\Event::findorfail($id);
    return view('events.edit', compact("event"));
});
