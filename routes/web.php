<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('jobs', [App\Http\Controllers\JobController::class, 'index']);
Route::get('jobs/create', [App\Http\Controllers\JobController::class, 'create']);
Route::post('jobs', [App\Http\Controllers\JobController::class, 'store']);

























// // create

// Route::get('/jobs/create', function () {
//     $jobs = new Job;
//     $jobs->title = 'Guard';
//     $jobs->description = 'Krusty Crab Guard';
//     $jobs->location = 'Kruty crab, Bikini Bottom';
//     $jobs->type = 'Full-Time';
//     $jobs->salary = 2.99;
//     $jobs->status = 0;
//     $jobs->company_id = 1;
//     $jobs->save();
//     return "Job Posted";
// });

// // Read
// Route::get('Job/read', function() {
//     $jobs = Job::all();

//     return $jobs;
// });

// // Update 
// Route::get('Job/{id}', function ($id) {
//     $jobs = Job::find($id);
//     $jobs->status = 1;
//     $jobs->salary = 200.00;
//     $jobs->save();

//     return "Item change successfully!";
// });

// // Delete
// Route::get('Job/delete/{id}', function ($id) {
//     $job = Job::find($id);
//     if ($job) {
//         $job->delete();
//         return "Job post deleted successfully";
//     } else {
//         return "Job post not found";
//     }
// });



// Route::get('/jobs', function () {
//     return "Showing all current job posting";
// });
// Route::get('/job/{id}/company/{companyid}', function ($code, $company) {
//     return "Job Code: " .$code. " company name: " .$company;
// });

// Route::get('/companies', function () {
//     return "Showing companies";
// });
// Route::get('/companies/search', function () {
//     return "Showing companies based on their recent job openings related to your search";
// });
// Route::get('/user', function () {
//     return "User Profile Page";
// });

// Route::get('/post', function () {
//     return "Page use to post Jobs";
// });