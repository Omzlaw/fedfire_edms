<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExcelController;
use App\Http\Controllers\Shared\FileDirectoryController;
use App\Http\Controllers\Shared\PolicyDocumentController;
use App\Http\Controllers\Humanresource\EmployeeController;

Route::group(['prefix' => 'humanresource', 'middleware' => ['auth']], function () {
    Route::resource('employees', 'Humanresource\EmployeeController', ["as" => 'humanresource']);
    Route::resource('employeeTerminations', 'Humanresource\EmployeeTerminationController', ["as" => 'humanresource']);
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
    Route::resource('employeeWives', 'Humanresource\EmployeeWifeController', ["as" => 'humanresource']);
    Route::resource('employeeQualifications', 'Humanresource\EmployeeQualificationController', ["as" => 'humanresource']);
    Route::resource('employeeAddresses', 'Humanresource\EmployeeAddressController', ["as" => 'humanresource']);
    Route::resource('employeeCensures', 'Humanresource\EmployeeCensureController', ["as" => 'humanresource']);
    Route::resource('employeeForeignTours', 'Humanresource\EmployeeForeignToursController', ["as" => 'humanresource']);
    Route::resource('employeeNextOfKins', 'Humanresource\EmployeeNextOfKinController', ["as" => 'humanresource']);
    Route::resource('employeeGratuities', 'Humanresource\EmployeeGratuityController', ["as" => 'humanresource']);
    Route::resource('employeePublicServices', 'Humanresource\EmployeePublicServiceController', ["as" => 'humanresource']);
    Route::resource('employeeForceServices', 'Humanresource\EmployeeForceServiceController', ["as" => 'humanresource']);
    Route::resource('employeeEducations', 'Humanresource\EmployeeEducationController', ["as" => 'humanresource']);
    Route::resource('employeeActionSheets', 'Humanresource\EmployeeActionSheetController', ["as" => 'humanresource']);
    Route::resource('employeeRecordTrackers', 'Humanresource\EmployeeRecordTrackerController', ["as" => 'humanresource']);
    Route::resource('employeeChildrens', 'Humanresource\EmployeeChildrenController', ["as" => 'humanresource']);
    Route::resource('employeeNextOfKins', 'Humanresource\EmployeeNextOfKinController', ["as" => 'humanresource']);
    Route::resource('employeeLocalLeaves', 'Humanresource\EmployeeLocalLeaveController', ["as" => 'humanresource']);
    Route::resource('employeeLanguages', 'Humanresource\EmployeeLanguageController', ["as" => 'humanresource']);
    Route::resource('employeeCertificates', 'Humanresource\EmployeeCertificatesController', ["as" => 'humanresource']);
    Route::resource('employeeRanks', 'Humanresource\EmployeeRankController', ["as" => 'humanresource']);
    Route::resource('employeeServices', 'Humanresource\EmployeeServiceController', ["as" => 'humanresource']);
    Route::resource('employeeBirthParticulars', 'Humanresource\EmployeeBirthParticularController', ["as" => 'humanresource']);
    Route::resource('employeeServiceRecords', 'Humanresource\EmployeeServiceRecordController', ["as" => 'humanresource']);
    Route::resource('employeeEmolumentRecords', 'Humanresource\EmployeeEmolumentRecordController', ["as" => 'humanresource']);
});


Route::post('humanresource/employees/destroyMany', [EmployeeController::class, 'destroyMany'])->name('employeeMultipleDelete')->middleware('auth');

Route::post('humanresource/employees/editEmployees', [EmployeeController::class, 'editManyView'])->name('employeeMultipleEditView')->middleware('auth');

Route::post('humanresource/employees/editMany', [EmployeeController::class, 'editMany'])->name('employeeMultipleEdit')->middleware('auth');


Route::group(['prefix' => 'shared', 'middleware' => ['auth']], function () {
    Route::resource('fileDirectories', 'Shared\FileDirectoryController', ["as" => 'shared']);
    Route::resource('policyDocuments', 'Shared\PolicyDocumentController', ["as" => 'shared']);
});

Route::group(['prefix' => 'shared', 'middleware' => ['auth','role:superadministrator']], function () {
    Route::resource('relationships', 'Shared\RelationshipController', ["as" => 'shared']);
    Route::resource('localGovtAreas', 'Shared\LocalGovtAreaController', ["as" => 'shared']);
    Route::resource('geoPoliticalZones', 'Shared\GeoPoliticalZoneController', ["as" => 'shared']);
    Route::resource('senatorialZones', 'Shared\SenatorialZoneController', ["as" => 'shared']);
    Route::resource('certificateTypes', 'Shared\CertificateTypeController', ["as" => 'shared']);
    Route::resource('rankTypes', 'Shared\RankTypeController', ["as" => 'shared']);
    Route::resource('countries', 'Shared\CountryController', ["as" => 'shared']);
    Route::resource('schoolTypes', 'Shared\SchoolTypeController', ["as" => 'shared']);
    Route::resource('qualificationTypes', 'Shared\QualificationTypeController', ["as" => 'shared']);
    Route::resource('serviceExitTypes', 'Shared\ServiceExitTypeController', ["as" => 'shared']);
    Route::resource('settings', 'Shared\SettingController', ["as" => 'shared']);
    Route::resource('states', 'Shared\StateController', ["as" => 'shared']);
    Route::resource('fileTypes', 'Shared\FileTypeController', ["as" => 'shared']);
    Route::resource('languages', 'Shared\LanguageController', ["as" => 'shared']);
    Route::resource('maritalStatuses', 'Shared\MaritalStatusController', ["as" => 'shared']);
    Route::resource('auditTrails', 'Shared\AuditTrailController', ["as" => 'shared']);
});



Route::resource('salaryScales', 'Humanresource\SalaryScaleController', ["as" => 'humanresource'])->middleware(['auth', 'role:superadministrator']);
Route::resource('terminationTypes', 'Humanresource\TerminationTypeController', ["as" => 'humanresource'])->middleware(['auth', 'role:superadministrator']);
Route::resource('leaveTypes', 'Humanresource\LeaveTypeController', ["as" => 'humanresource'])->middleware(['auth', 'role:superadministrator']);

Route::get('report', [EmployeeController::class, 'report'])->name('report')->middleware('auth');

Route::post('humanresource/employees/filter', [EmployeeController::class, 'filter'])->name('filter')->middleware('auth');

Route::post('humanresource/employees/import', [EmployeeController::class, 'import'])->name('import')->middleware('auth');

Route::get('fileDirectories', [FileDirectoryController::class, 'getSearch'])->name('getSearch')->middleware('auth');


Route::post('fileDirectories', [FileDirectoryController::class, 'search'])->name('employeeSearch')->middleware('auth');

Route::post('fileDirectories/records', [FileDirectoryController::class, 'records'])->name('records')->middleware('auth');

Route::get('fileDirectories/records', [FileDirectoryController::class, 'records'])->name('records')->middleware('auth');

Route::resource('users', 'UserController')->middleware('auth');



Route::group(['prefix' => 'shared', 'middleware' => ['auth']], function () {
});

Route::get('blank/fileDirectories', [FileDirectoryController::class, 'blank'])->name('shared.fileDirectories.blank')->middleware('auth');

Route::post('fileDirectories/class', [FileDirectoryController::class, 'fileClass'])->name('fileClass')->middleware('auth');

Route::post('fileDirectories/searchClass', [FileDirectoryController::class, 'fileSearchClass'])->name('fileSearchClass')->middleware('auth');

Route::post('policyFiles', [PolicyDocumentController::class, 'search'])->name('policyFileSearch')->middleware('auth');
