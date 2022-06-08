<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExamCommitteeController;
use App\Http\Controllers\HospitalManagementController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('admin/home', [HomeController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/* Hospital Management Routes */

/* Hospital Management -- Appinment Control */

//Add
Route::post('/appoinmentaddprocess', [HospitalManagementController::class, 'appoinmentaddstore']);
//Show
Route::get('/allappoinment', [HospitalManagementController::class, 'appoinmentshow']);
//edit and delete
Route::get('/appoinmentedit/{id}', [HospitalManagementController::class,'appoinmentedit' ]) ;
Route::post('/appoinmenteditprocess/{id}', [HospitalManagementController::class,'appoinmenteditprocess' ]) ;
Route::get('/deleteappoinment/{id}', [HospitalManagementController::class,'deleteappoinment' ]) ;

/* Hospital Management -- Confirmed Appoinment */

 //Show
Route::get('/confirmedappoinmentshow', [HospitalManagementController::class, 'confirmedappoinmentshow']);
//edit and delete
Route::get('/confirmedappoinmentedit/{id}', [HospitalManagementController::class,'confirmedappoinmentedit' ]) ;
Route::post('/confirmedappoinmenteditprocess/{id}', [HospitalManagementController::class,'confirmedappoinmenteditprocess' ]) ;
Route::get('/deleteconfirmedappoinment/{id}', [HospitalManagementController::class,'deleteconfirmedappoinment' ]) ;

/* Hospital Management -- Doctor Registration */

//Add
Route::get('/doctoradd', [HospitalManagementController::class, 'doctoradd']);
Route::post('/adddoctor', [HospitalManagementController::class, 'doctorstore']);
//Show
Route::get('/alldoctorshow', [HospitalManagementController::class, 'alldoctorshow']);
//edit and delete
Route::get('/doctoredit/{id}', [HospitalManagementController::class,'doctoredit' ]) ;
Route::post('/doctoreditprocess/{id}', [HospitalManagementController::class,'doctoreditprocess' ]) ;
Route::get('/deletedoctor/{id}', [HospitalManagementController::class,'deletedoctor' ]) ;
