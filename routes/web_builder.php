<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Shared\FileDirectoryController;

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
});

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeLanguages', 'Humanresource\EmployeeLanguageController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeLocalLeaves', 'Humanresource\EmployeeLocalLeaveController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeChildrens', 'Humanresource\EmployeeChildrenController', ["as" => 'humanresource']);
    Route::resource('employeeNextOfKins', 'Humanresource\EmployeeNextOfKinController', ["as" => 'humanresource']);
});

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




Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeQualifications', 'Humanresource\EmployeeQualificationController', ["as" => 'humanresource']);
    Route::resource('employeeAddresses', 'Humanresource\EmployeeAddressController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeCensures', 'Humanresource\EmployeeCensureController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('certificateTypes', 'Shared\CertificateTypeController', ["as" => 'shared']);
});



Route::group(['prefix' => 'shared'], function () {
    Route::resource('relationships', 'Shared\RelationshipController', ["as" => 'shared']);
    Route::resource('localGovtAreas', 'Shared\LocalGovtAreaController', ["as" => 'shared']);
});

Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employees', 'Humanresource\EmployeeController', ["as" => 'humanresource']);
});



Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeForeignTours', 'Humanresource\EmployeeForeignToursController', ["as" => 'humanresource']);
    Route::resource('rankTypes', 'Shared\RankTypeController', ["as" => 'shared']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('leaveTypes', 'Humanresource\LeaveTypeController', ["as" => 'humanresource']);
});


Route::group(['prefix' => 'humanresource'], function () {
    Route::resource('employeeNextOfKins', 'Humanresource\EmployeeNextOfKinController', ["as" => 'humanresource']);
});


Route::resource('users', 'UserController')->middleware('auth');

Route::get('fileDirectories', [FileDirectoryController::class, 'getSearch'])->name('shared.fileDirectories.getSearch');
Route::post('fileDirectories', [FileDirectoryController::class, 'search'])->name('searchEmployeeRecord');


Route::group(['prefix' => 'shared'], function () {
    Route::resource('geoPoliticalZones', 'Shared\GeoPoliticalZoneController', ["as" => 'shared']);
});


Route::group(['prefix' => 'shared'], function () {
    Route::resource('senatorialZones', 'Shared\SenatorialZoneController', ["as" => 'shared']);
});
