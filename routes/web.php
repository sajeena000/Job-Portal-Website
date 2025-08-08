<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\JobApplicationController;
use App\Http\Controllers\admin\JobController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FeaturedCompaniesController;

use App\Http\Controllers\JobsController;
use Illuminate\Support\Facades\Route;

use Illuminate\Support\Facades\Mail;
use App\Mail\ResetPasswordEmail; // Import your email class here

// Route::get('/test-email', function () {
//     // Example data for the email
//     $mailData = [
//         'user' => (object) ['name' => 'John Doe'],
//         'token' => 'example_token'
//     ];

//     // Send the email
//     Mail::to('recipient@example.com')->send(new ResetPasswordEmail($mailData));

//     return 'Test email sent!';
// });


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/featured-companies', [FeaturedCompaniesController::class, 'index'])->name('featured-companies');
Route::get('/contact', [ContactUsController::class, 'index'])->name('contact');


Route::post('/submit_contact_form', [ContactUsController::class, 'submitForm'])->name('submit_contact_form');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');
Route::get('/jobs/detail/{id}', [JobsController::class, 'detail'])->name('jobDetail');
Route::post('/apply-job', [JobsController::class, 'applyJob'])->name('applyJob');
Route::post('/save-job', [JobsController::class, 'saveJob'])->name('saveJob');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/forgot-password',[AccountController::class,'forgotPassword'])->name('account.forgotPassword');
Route::post('/process-forgot-password',[AccountController::class,'processForgotPassword'])->name('account.processForgotPassword');
Route::get('/reset-password/{token}',[AccountController::class,'resetPassword'])->name('account.resetPassword');
Route::post('/process-reset-password',[AccountController::class,'processResetPassword'])->name('account.processResetPassword');



Route::group(['prefix' => 'admin','middleware' => 'checkRole'], function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::get('/users', [UserController::class, 'index'])->name('admin.users');
Route::get('/users/{id}', [UserController::class, 'edit'])->name('admin.users.edit');
Route::put('/users/{id}', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/users', [UserController::class, 'destroy'])->name('admin.users.destroy');
Route::get('/jobs', [JobController::class, 'index'])->name('admin.jobs');
Route::get('/jobs/edit/{id}', [JobController::class, 'edit'])->name('admin.jobs.edit');
Route::put('/jobs/{id}', [JobController::class, 'update'])->name('admin.jobs.update');
Route::delete('/jobs', [JobController::class, 'destroy'])->name('admin.jobs.destroy');
// For listing job applications
Route::get('/jobs-applications', [JobApplicationController::class, 'index'])->name('admin.jobApplications');

// For deleting a job application
Route::delete('/jobs-applications/{id}', [JobApplicationController::class, 'destroy'])->name('admin.jobApplications.destroy');
});


Route::group(['prefix' => 'account'], function () {

    // Guest Routes
    Route::group(['middleware' => 'guest'], function(){
        Route::get('/register', [AccountController::class, 'registration'])->name('account.registration');
        Route::post('/process-register', [AccountController::class, 'processRegistration'])->name('account.processRegistration');
        Route::get('/login',[AccountController::class,'login'])->name('account.login');
        Route::post('/authenticate',[AccountController::class,'authenticate'])->name('account.authenticate');
    });

    // Authenticated Routes
    Route::group(['middleware' => 'auth'], function() {
        
        
        Route::get('/profile', [AccountController::class, 'profile'])->name('account.profile');

        Route::put('/update-profile',[AccountController::class,'updateProfile'])->name('account.updateProfile');
        Route::get('/logout',[AccountController::class,'logout'])->name('account.logout');   
        Route::post('/update-profile-pic',[AccountController::class,'updateProfilePic'])->name('account.updateProfilePic');                
    
    Route::get('/create-job', [AccountController::class, 'createJob'])->name('account.createJob');
    Route::post('/save-job', [AccountController::class, 'saveJob'])->name('account.saveJob');
    //Route::post('/my-jobs', [AccountController::class, 'myJobs'])->name('account.myJobs');
    Route::match(['get', 'post'], '/my-jobs', [AccountController::class, 'myJobs'])->name('account.myJobs');
    Route::post('/save-job', [AccountController::class, 'saveJob'])->name('account.saveJob');
    Route::get('/my-jobs', [AccountController::class, 'myJobs'])->name('account.myJobs');
    Route::get('/my-jobs/edit/{jobId}', [AccountController::class, 'editJob'])->name('account.editJob');
    Route::post('/update-job/{jobId}', [AccountController::class, 'updateJob'])->name('account.updateJob');
    Route::post('/delete-job', [AccountController::class, 'deleteJob'])->name('account.deleteJob');
    Route::get('/my-job-applications', [AccountController::class, 'myJobApplications'])->name('account.myJobApplications');

    Route::post('/remove-job-application', [AccountController::class, 'removeJobs'])->name('account.removeJobs');
    Route::get('/saved-jobs', [AccountController::class, 'savedJobs'])->name('account.savedJobs');
    Route::post('/remove-saved-job', [AccountController::class, 'removeSavedJob'])->name('account.removeSavedJob');
    Route::post('/update-password', [AccountController::class, 'updatePassword'])->name('account.updatePassword');





});

});

