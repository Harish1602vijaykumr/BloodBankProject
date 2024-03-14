<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('donor.LandingPage');
});
Route::get('/signout', function () {
   Auth::logout();
   return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login_page', [App\Http\Controllers\HomeController::class, 'Login']);
Route::get('/navbar_page', [App\Http\Controllers\HomeController::class, 'Navbar']);
Route::get('/landing_page', [App\Http\Controllers\HomeController::class, 'Landing']);


Route::get('/donor_list_page', [App\Http\Controllers\AdminController::class, 'Donor_List']);
Route::get('/complete_page', [App\Http\Controllers\AdminController::class, 'Complete_lists']);

Route::get('/districts_page', [App\Http\Controllers\DistrictController::class, 'Districts']);
Route::get('/create_district_page', [App\Http\Controllers\districtController::class, 'Create_Districts']);
Route::post('/district_store', [App\Http\Controllers\DistrictController::class, 'Districtstore']);

Route::get('/register_page', [App\Http\Controllers\DonorController::class, 'Register']);
Route::post('/store_donor_request', [App\Http\Controllers\DonorController::class, 'StoreDonorRequest']);
Route::get('/donor_page', [App\Http\Controllers\DonorController::class, 'Donor_Request']);
Route::get('/edit_donor/{id}', [App\Http\Controllers\DonorController::class, 'Edit_donor']);
Route::get('/accept_donor/{id}', [App\Http\Controllers\DonorController::class, 'AcceptDonor']);
Route::post('/store_donor_edit', [App\Http\Controllers\DonorController::class, 'EditDonorstore']);

Route::get('/request_page', [App\Http\Controllers\BloodController::class, 'Request']);
Route::post('/store_blood_request', [App\Http\Controllers\BloodController::class, 'StoreBloodRequest']);
Route::get('/donor_available_page', [App\Http\Controllers\BloodController::class, 'DonorAvailable']);
Route::get('/blood_page', [App\Http\Controllers\BloodController::class, 'Blood_Request']);
Route::get('/edit_blood/{id}', [App\Http\Controllers\BloodController::class, 'EditBloodRequest']);
Route::post('/check_status', [App\Http\Controllers\BloodController::class, 'CheckStatus']);
