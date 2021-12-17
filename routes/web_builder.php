<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportExcelController;
use App\Http\Controllers\Shared\FileDirectoryController;
use App\Http\Controllers\Shared\PolicyDocumentController;
use App\Http\Controllers\Humanresource\EmployeeController;

Route::group(['prefix' => 'humanresource', 'middleware' => ['permission:employees-manage', 'auth']], function () {
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


Route::post('humanresource/employees/destroyMany', [EmployeeController::class, 'destroyMany'])->name('employeeMultipleDelete')->middleware('permission:employees-manage', 'auth');


Route::group(['prefix' => 'shared', 'middleware' => ['role:superadministrator', 'auth']], function () {
    Route::resource('fileDirectories', 'Shared\FileDirectoryController', ["as" => 'shared'])->middleware('auth');
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
    Route::resource('policyDocuments', 'Shared\PolicyDocumentController', ["as" => 'shared']);
});



Route::resource('salaryScales', 'Humanresource\SalaryScaleController', ["as" => 'humanresource'])->middleware('role:superadministrator', 'auth');
Route::resource('terminationTypes', 'Humanresource\TerminationTypeController', ["as" => 'humanresource'])->middleware('role:superadministrator', 'auth');
Route::resource('leaveTypes', 'Humanresource\LeaveTypeController', ["as" => 'humanresource'])->middleware('role:superadministrator', 'auth');

Route::get('report', [EmployeeController::class, 'report'])->name('report')->middleware('role:superadministrator', 'auth');

Route::post('humanresource/employees/filter', [EmployeeController::class, 'filter'])->name('filter')->middleware('permission:employees-manage','auth');

Route::post('humanresource/employees/import', [EmployeeController::class, 'import'])->name('import')->middleware('permission:employees-manage','auth');

Route::get('fileDirectories', [FileDirectoryController::class, 'getSearch'])->name('getSearch')->middleware('role:superadministrator','auth');


Route::post('fileDirectories', [FileDirectoryController::class, 'search'])->name('employeeSearch')->middleware('role:superadministrator','auth');

Route::post('fileDirectories/records', [FileDirectoryController::class, 'records'])->name('records')->middleware('role:superadministrator','auth');

Route::get('fileDirectories/records', [FileDirectoryController::class, 'records'])->name('records')->middleware('role:superadministrator','auth');

Route::resource('users', 'UserController')->middleware('role:superadministrator','auth');



Route::group(['prefix' => 'shared', 'middleware' => ['auth']], function () {
});

Route::get('blank/fileDirectories', [FileDirectoryController::class, 'blank'])->name('shared.fileDirectories.blank')->middleware('role:superadministrator','auth');

Route::post('fileDirectories/class', [FileDirectoryController::class, 'fileClass'])->name('fileClass')->middleware('role:superadministrator','auth');

Route::post('fileDirectories/searchClass', [FileDirectoryController::class, 'fileSearchClass'])->name('fileSearchClass')->middleware('role:superadministrator','auth');

Route::post('policyFiles', [PolicyDocumentController::class, 'search'])->name('policyFileSearch')->middleware('role:superadministrator','auth');
