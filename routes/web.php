<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/jobs', function () {
    return "Showing all current job posting";
});
Route::get('/job/{id}/company/{companyid}', function ($code, $company) {
    return "Job Code: " .$code. " company name: " .$company;
});

Route::get('/companies', function () {
    return "Showing companies";
});
Route::get('/companies/search', function () {
    return "Showing companies based on their recent job openings related to your search";
});
Route::get('/user', function () {
    return "User Profile Page";
});

Route::get('/post', function () {
    return "Page use to post Jobs";
});