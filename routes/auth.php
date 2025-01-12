<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\AuthenticatedSessionAdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionCustomerController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordAdminController;
use App\Http\Controllers\Auth\PasswordCustomerController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\RegisteredAdminController;
use App\Http\Controllers\Auth\RegisteredCustomerController;
use App\Http\Controllers\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
        ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
        ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
        ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
        ->name('password.store');
});

Route::middleware('guest:admin')->group(function () {
    
    //register admin
    Route::get('registeradmin', [RegisteredAdminController::class, 'create'])
        ->name('register.admin');

    Route::post('registeradmin', [RegisteredAdminController::class, 'store'])->name('registeradmin.store');

    //loginadmin
    Route::get('loginadmin', [AuthenticatedSessionAdminController::class, 'create'])
        ->name('loginadmin');

    Route::post('loginadmin', [AuthenticatedSessionAdminController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});

Route::middleware('auth:admin')->group(function () {
    /** 
    Route::get('verify-email', EmailVerificationPromptController::class)
        ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
        ->middleware(['signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
        ->middleware('throttle:6,1')
        ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
        ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);
    */

    Route::put('passwordAdmin', [PasswordAdminController::class, 'update'])->name('passwordAdmin.update');

    Route::post('logoutAdmin', [AuthenticatedSessionAdminController::class, 'destroy'])
        ->name('logoutAdmin');
});

//==========customer===========================================================================================================================================

Route::middleware('guest:customer')->group(function () {
    
    //register customer
    Route::get('registercustomer', [RegisteredCustomerController::class, 'create'])
        ->name('register.customer');

    Route::post('registercustomer', [RegisteredCustomerController::class, 'store'])->name('registercustomer.store');

    //login customer
    Route::get('logincustomer', [AuthenticatedSessionCustomerController::class, 'create'])
        ->name('logincustomer');

    Route::post('logincustomer', [AuthenticatedSessionCustomerController::class, 'store']);
});


Route::middleware('auth:customer')->group(function () {
    
    Route::put('passwordCustomer', [PasswordCustomerController::class, 'update'])->name('passwordCustomer.update');

    Route::post('logoutCustomer', [AuthenticatedSessionCustomerController::class, 'destroy'])
        ->name('logoutCustomer');
});