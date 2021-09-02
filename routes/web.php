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

Auth::routes(['verify' => true]);

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

Route::name('agent.')->prefix('agent')->middleware('auth:web-agent')->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\AgentController::class, 'dashboard'])->name('dashboard');
    Route::get('/prospects', [\App\Http\Controllers\AgentController::class, 'prospects'])->name('prospects');
    Route::post('/prospects', [\App\Http\Controllers\AgentController::class, 'createProspect']);
    Route::get('/clients', [\App\Http\Controllers\AgentController::class, 'clients'])->name('clients');
    Route::post('/clients', [\App\Http\Controllers\AgentController::class, 'createClients']);
    Route::get('/insurance', [\App\Http\Controllers\AgentController::class, 'insurance'])->name('insurance');

});