<?php

use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeCertificates', 'Humanresource\EmployeeCertificatesController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeChildrens', 'Humanresource\EmployeeChildrenController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeEducations', 'Humanresource\EmployeeEducationController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeForceServices', 'Humanresource\EmployeeForceServiceController', ["as" => 'humanresource']);
});




Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeGratuities', 'Humanresource\EmployeeGratuityController', ["as" => 'humanresource']);
});
