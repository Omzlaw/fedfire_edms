<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeLanguages', 'Humanresource\EmployeeLanguageController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeLocalLeaves', 'Humanresource\EmployeeLocalLeaveController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeNextOfKins', 'Humanresource\EmployeeNextOfKinController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeePublicServices', 'Humanresource\EmployeePublicServiceController', ["as" => 'humanresource']);
});


Route::resource('employeePublicServices', 'EmployeePublicServiceController');

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeQualifications', 'Humanresource\EmployeeQualificationController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('relationships', 'Shared\RelationshipController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employees', 'Humanresource\EmployeeController', ["as" => 'humanresource']);
});
