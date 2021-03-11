<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserDetails;
use App\Http\Controllers\BusinessPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\VinController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::group(['prefix' => '/'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/askexpert', [HomeController::class, 'askExpert'])->name('Ask Expert');
    Route::get('/contact', [HomeController::class, 'contactUs'])->name('Contact Us');

    // Register route

    Route::get('/register/basic', [HomeController::class, 'basicinfo'])->name('Basic');
    Route::get('/register/skills', [HomeController::class, 'skills'])->name('Skills');
    Route::get('/register/tools', [HomeController::class, 'tools'])->name('Tools');
    
});


// Auth Route
Route::group(['middleware' => ['auth']], function () {

    Route::get('/businesspage', [BusinessPageController::class, 'index'])->name('Business Page');


    // Run update Skillset 
    Route::post('/register/basic', [UserDetails::class, 'insertBasic'])->name('insertBasic');
    Route::post('/register/skills', [UserDetails::class, 'insertSkill'])->name('insertSkill');
    
    Route::post('/register/tools', [UserDetails::class, 'insertTools'])->name('insertTools');


    Route::prefix('userdashboard')->group(function () {

        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::get('/opportunity', [DashboardController::class, 'opportunity'])->name('opportunity');
        Route::get('/review', [DashboardController::class, 'review'])->name('review');
        Route::get('/shopmanagement', [DashboardController::class, 'shopManagement'])->name('shopmanagement');
        Route::get('/phoneappointment', [DashboardController::class, 'phoneAppointment'])->name('phoneappointment');
        Route::get('/vinlookup', [DashboardController::class, 'vinLookup'])->name('vinlookup');
        Route::get('/createticket', [DashboardController::class, 'createTicket'])->name('createticket');
    });


    // Opportunity ROutes
    

    Route::prefix('userdashboard/opportunity')->group(function () {

        Route::get('/appointments', [OpportunityController::class, 'appointments'])->name('view appointments');
        Route::get('/opportunitypost', [OpportunityController::class, 'opportunityPost'])->name('view opportunity');
        Route::get('/approvedestimates', [OpportunityController::class, 'approvedEstimate'])->name('view approved estimates');
        Route::get('/submittedestimates', [OpportunityController::class, 'submittedEstimate'])->name('view submitted estimates');
        Route::get('/jobdone', [OpportunityController::class, 'jobDone'])->name('view job done');
        Route::get('/phoneappointment', [OpportunityController::class, 'phoneAppointment'])->name('view phone appointment list');
        Route::post('/closeappointments', [OpportunityController::class, 'closeAppointments'])->name('close appointment');
    });



    // Service Review
    Route::prefix('userdashboard/review')->group(function () {

        Route::post('/reviewresponse/{postid}', [ReviewController::class, 'reviewResponse'])->name('reviewresponse');

    }); 


    // Appointment Bookings 
    Route::prefix('userdashboard/appointments')->group(function () {

        Route::post('/appointmentonphone', [AppointmentController::class, 'phoneAppointment'])->name('appointmentonphone');

    }); 



    Route::prefix('Ajax')->group(function () {
        Route::post('/updatebusinessLogo', [BusinessPageController::class, 'updateBusinessLogo'])->name('updatebusinessLogo');


        Route::post('/getappointments', [OpportunityController::class, 'getAppointments'])->name('getappointments');
        Route::post('/getthisappointment', [OpportunityController::class, 'getThisAppointment'])->name('getthisappointment');


        // VIN Lookup

        Route::post('/vinlookup', [VinController::class, 'decodeInfo'])->name('vinlookups');

    });

    
});

