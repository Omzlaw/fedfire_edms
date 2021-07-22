<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeTerminations', 'Humanresource\EmployeeTerminationController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('fileDirectories', 'Shared\FileDirectoryController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('fileTypes', 'Shared\FileTypeController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('languages', 'Shared\LanguageController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('maritalStatuses', 'Shared\MaritalStatusController', ["as" => 'shared']);
});
