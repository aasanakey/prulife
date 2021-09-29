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
})->name('landing');

/**
 * Client auth routes
 */
Auth::routes(['verify' => true]);

/**
 * Client dashboard routes
 */
Route::name('user.')->prefix('client')->middleware('auth:web')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', \App\Http\Controllers\UserController::class)->parameters(['profile' => 'user'])->except(['index', 'create', 'show']);
    Route::get('insurance', [\App\Http\Controllers\UserController::class, 'insurance'])->name('insurance');
    Route::get('claims', [\App\Http\Controllers\UserController::class, 'claims'])->name('claims');
    Route::get('add/claims', [\App\Http\Controllers\UserController::class, 'createClaim'])->name('claims.create');
    Route::get('payments', [\App\Http\Controllers\UserController::class, 'payments'])->name('payments');
    Route::get('sms', [\App\Http\Controllers\UserController::class, 'sms'])->name('sms');
    Route::get('emails', [\App\Http\Controllers\UserController::class, 'emails'])->name('emails');
    Route::post('communications', [\App\Http\Controllers\UserController::class, 'communications'])->name('communications');
    Route::resource('claim', \App\Http\Controllers\ClaimsController::class)->except(['index', 'create', 'show','edit']);

});

/**
 * Agent auth routes
 */
Route::name('agent.')->prefix('agent')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\Agent\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [\App\Http\Controllers\Auth\Agent\LoginController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\Auth\Agent\LoginController::class, 'logout'])->name('logout');
    Route::get('register', [\App\Http\Controllers\Auth\Agent\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [\App\Http\Controllers\Auth\Agent\RegisterController::class, 'register']);
    Route::get('password/reset', [\App\Http\Controllers\Auth\Agent\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [\App\Http\Controllers\Auth\Agent\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [\App\Http\Controllers\Auth\Agent\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [\App\Http\Controllers\Auth\Agent\ResetPasswordController::class, 'reset'])->name('password.update');
    Route::get('password/confirm', [\App\Http\Controllers\Auth\Agent\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    Route::post('password/confirm', [\App\Http\Controllers\Auth\Agent\ConfirmPasswordController::class, 'confirm']);
    Route::get('email/verify', [\App\Http\Controllers\Auth\Agent\VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\Agent\VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [\App\Http\Controllers\Auth\Agent\VerificationController::class, 'resend'])->name('verification.resend');
});

/**
 * Agent dashboard routes
 */
Route::name('agent.')->prefix('agent')->middleware('auth:web-agent')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AgentController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', \App\Http\Controllers\AgentController::class)->parameters(['profile' => 'agent']);
    Route::get('/prospects', [\App\Http\Controllers\AgentController::class, 'prospects'])->name('prospects');
    Route::post('/prospects', [\App\Http\Controllers\AgentController::class, 'createProspect']);
    Route::get('/clients', [\App\Http\Controllers\AgentController::class, 'clients'])->name('clients');
    Route::post('/clients', [\App\Http\Controllers\AgentController::class, 'createClients']);
    Route::get('/insurance', [\App\Http\Controllers\AgentController::class, 'insurance'])->name('insurance');
    Route::post('/insurance', [\App\Http\Controllers\AgentController::class, 'createInsurance']);

});

Route::prefix('csc')->group(function () {
    // Route::post('country', [\App\Http\Controllers\CountryStateCityController::class, 'getCountry'])->name('country');
    Route::post('state', [\App\Http\Controllers\CountryStateCityController::class, 'getState'])->name('state');
    Route::post('city', [\App\Http\Controllers\CountryStateCityController::class, 'getCity'])->name('city');

});

/**
 * Admin auth routes
 */
Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\Admin\LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [\App\Http\Controllers\Auth\Admin\LoginController::class, 'login']);
    Route::post('logout', [\App\Http\Controllers\Auth\Admin\LoginController::class, 'logout'])->name('logout');
    Route::get('register', [\App\Http\Controllers\Auth\Admin\RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [\App\Http\Controllers\Auth\Admin\RegisterController::class, 'register']);
    Route::get('password/reset', [\App\Http\Controllers\Auth\Admin\ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [\App\Http\Controllers\Auth\Admin\ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [\App\Http\Controllers\Auth\Admin\ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [\App\Http\Controllers\Auth\Admin\ResetPasswordController::class, 'reset'])->name('password.update');
    Route::get('password/confirm', [\App\Http\Controllers\Auth\Admin\ConfirmPasswordController::class, 'showConfirmForm'])->name('password.confirm');
    Route::post('password/confirm', [\App\Http\Controllers\Auth\Admin\ConfirmPasswordController::class, 'confirm']);
    Route::get('email/verify', [\App\Http\Controllers\Auth\Admin\VerificationController::class, 'show'])->name('verification.notice');
    Route::get('email/verify/{id}/{hash}', [\App\Http\Controllers\Auth\Admin\VerificationController::class, 'verify'])->name('verification.verify');
    Route::post('email/resend', [\App\Http\Controllers\Auth\Admin\VerificationController::class, 'resend'])->name('verification.resend');
});

/**
 * Agent dashboard routes
 */
Route::name('admin.')->prefix('admin')->middleware('auth:web-admin')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('profile', \App\Http\Controllers\AdminController::class)->parameters(['profile' => 'admin']);
    Route::get('/prospects', [\App\Http\Controllers\AgentController::class, 'prospects'])->name('prospects');
    Route::post('/prospects', [\App\Http\Controllers\AgentController::class, 'createProspect']);
    Route::get('/clients', [\App\Http\Controllers\AgentController::class, 'clients'])->name('clients');
    Route::post('/clients', [\App\Http\Controllers\AgentController::class, 'createClients']);
    Route::get('/insurance', [\App\Http\Controllers\AgentController::class, 'insurance'])->name('insurance');
    Route::post('/insurance', [\App\Http\Controllers\AgentController::class, 'createInsurance']);

});