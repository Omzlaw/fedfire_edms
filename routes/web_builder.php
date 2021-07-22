<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'humanresources'], function () {
    Route::resource('leaveTypes', 'Humanresources\LeaveTypeController', ["as" => 'humanresources']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('rankTypes', 'Shared\RankTypeController', ["as" => 'shared']);
});
