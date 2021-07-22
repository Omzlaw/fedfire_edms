<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeRecordTrackers', 'Humanresource\EmployeeRecordTrackerController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('countries', 'Shared\CountryController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeActionSheets', 'Humanresource\EmployeeActionSheetController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeAddresses', 'Humanresource\EmployeeAddressController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeCensures', 'Humanresource\EmployeeCensureController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('certificateTypes', 'Shared\CertificateTypeController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('localGovtAreas', 'Shared\LocalGovtAreaController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeForeignTours', 'Humanresource\EmployeeForeignToursController', ["as" => 'humanresource']);
});
