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

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeCertificates', 'Humanresource\EmployeeCertificatesController', ["as" => 'humanresource']);

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeLanguages', 'Humanresource\EmployeeLanguageController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeLocalLeaves', 'Humanresource\EmployeeLocalLeaveController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeChildrens', 'Humanresource\EmployeeChildrenController', ["as" => 'humanresource']);
    Route::resource('employeeNextOfKins', 'Humanresource\EmployeeNextOfKinController', ["as" => 'humanresource']);

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeRecordTrackers', 'Humanresource\EmployeeRecordTrackerController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('countries', 'Shared\CountryController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeEducations', 'Humanresource\EmployeeEducationController', ["as" => 'humanresource']);
    Route::resource('employeeActionSheets', 'Humanresource\EmployeeActionSheetController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeForceServices', 'Humanresource\EmployeeForceServiceController', ["as" => 'humanresource']);
});




Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeGratuities', 'Humanresource\EmployeeGratuityController', ["as" => 'humanresource']);
    Route::resource('employeePublicServices', 'Humanresource\EmployeePublicServiceController', ["as" => 'humanresource']);
});


Route::resource('employeePublicServices', 'EmployeePublicServiceController');

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeQualifications', 'Humanresource\EmployeeQualificationController', ["as" => 'humanresource']);
    Route::resource('employeeAddresses', 'Humanresource\EmployeeAddressController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeCensures', 'Humanresource\EmployeeCensureController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('certificateTypes', 'Shared\CertificateTypeController', ["as" => 'shared']);

Route::group(['prefix' => 'humanresources'], function () {
    Route::resource('leaveTypes', 'Humanresources\LeaveTypeController', ["as" => 'humanresources']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('relationships', 'Shared\RelationshipController', ["as" => 'shared']);
});

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employees', 'Humanresource\EmployeeController', ["as" => 'humanresource']);
});
    Route::resource('localGovtAreas', 'Shared\LocalGovtAreaController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeForeignTours', 'Humanresource\EmployeeForeignToursController', ["as" => 'humanresource']);
    Route::resource('rankTypes', 'Shared\RankTypeController', ["as" => 'shared']);
});
