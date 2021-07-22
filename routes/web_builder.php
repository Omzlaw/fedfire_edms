<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'shared'], function () {
    Route::resource('qualificationTypes', 'Shared\QualificationTypeController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('salaryScales', 'Humanresource\SalaryScaleController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('schoolTypes', 'Shared\SchoolTypeController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('serviceExitTypes', 'Shared\ServiceExitTypeController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('settings', 'Shared\SettingController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('states', 'Shared\StateController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('terminationTypes', 'Humanresource\TerminationTypeController', ["as" => 'humanresource']);
});
