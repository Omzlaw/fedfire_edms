<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('salaryScales', 'Humanresource\SalaryScaleController', ["as" => 'humanresource']);
    Route::resource('terminationTypes', 'Humanresource\TerminationTypeController', ["as" => 'humanresource']);
    Route::resource('employeeTerminations', 'Humanresource\EmployeeTerminationController', ["as" => 'humanresource']);
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
});

Route::group(['prefix' => 'shared'], function () {
    Route::resource('schoolTypes', 'Shared\SchoolTypeController', ["as" => 'shared']);
    Route::resource('qualificationTypes', 'Shared\QualificationTypeController', ["as" => 'shared']);
    Route::resource('serviceExitTypes', 'Shared\ServiceExitTypeController', ["as" => 'shared']);
    Route::resource('settings', 'Shared\SettingController', ["as" => 'shared']);
    Route::resource('states', 'Shared\StateController', ["as" => 'shared']);
    Route::resource('fileDirectories', 'Shared\FileDirectoryController', ["as" => 'shared']);
    Route::resource('fileTypes', 'Shared\FileTypeController', ["as" => 'shared']);
    Route::resource('languages', 'Shared\LanguageController', ["as" => 'shared']);
    Route::resource('maritalStatuses', 'Shared\MaritalStatusController', ["as" => 'shared']);
});