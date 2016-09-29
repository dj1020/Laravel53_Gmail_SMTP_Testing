<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/testMail', function () {
    $to = request()->get('mail');
    Mail::raw('Hello World Mail to test mail sending', function($m) use ($to) {
        $m->to($to)->subject('Testing mail');
    });

    return "Done, Mail sent to $to";
});