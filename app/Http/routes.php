<?php

use App\Events\EventName;

Route::get('/', function() {
    // this doesn't do anything other than to
    // tell you to go to /fire
    return "go to /fire";
});

Route::get('fire', function () {
    // this fires the event
    event(new EventName());
    return "event fired";
});

Route::get('test', function () {
    // this checks for the event
    return view('master');
});
