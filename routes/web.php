<?php

use App\Models\admin;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileAdminController;
use App\Http\Middleware\RedirectIfNotAdmin;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('allcustomer.home');
});


Route::prefix('customer')->group(function () {
    Route::get('home', function () {
        return view('allcustomer.home');
    })->name('customer.home');

    Route::get('services', function () {
        return view('allcustomer.services');
    })->name('customer.services');

    Route::get('rooms', function () {
        return view('allcustomer.rooms');
    })->name('customer.rooms');

    Route::get('about', function () {
        return view('allcustomer.about');
    })->name('customer.about');

    Route::get('contact', function () {
        return view('allcustomer.contact');
    })->name('customer.contact');
});

//superadmin

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboardadmin', function () {
    return view('dashboardadmin');
})->middleware(['auth:admin', 'verified'])->name('dashboard.admin');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
    Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
    Route::patch('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
    Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
    Route::get('/customer/edit/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::patch('/customer/update/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customer/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');
});


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/kamar', [KamarController::class, 'index'])->name('kamar');
    Route::get('/kamar/edit/{id}', [KamarController::class, 'edit'])->name('kamar.edit');
    Route::patch('/kamar/update/{id}', [KamarController::class, 'update'])->name('kamar.update');
    Route::delete('/kamar/{id}', [KamarController::class, 'destroy'])->name('kamar.destroy');
    Route::get('/kamar/create', [KamarController::class, 'create'])->name('kamar.create');
    Route::post('/kamar/store', [KamarController::class, 'store'])->name('kamar.store');
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/kamarAdmin', [KamarController::class, 'index2'])->name('kamar.Admin');
    Route::get('/kamarAdmin/edit/{id}', [KamarController::class, 'edit2'])->name('kamarAdmin.edit');
    Route::patch('/kamarAdmin/update/{id}', [KamarController::class, 'update2'])->name('kamarAdmin.update');
    Route::delete('/kamarAdmin/{id}', [KamarController::class, 'destroy2'])->name('kamarAdmin.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
    Route::get('/payment/edit/{id}', [PaymentController::class, 'edit'])->name('payment.edit');
    Route::patch('/payment/update/{id}', [PaymentController::class, 'update'])->name('payment.update');
    Route::delete('/payment/{id}', [PaymentController::class, 'destroy'])->name('payment.destroy');
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/paymentAdmin', [PaymentController::class, 'index2'])->name('payment.Admin');
    Route::get('/paymentAdmin/edit/{id}', [PaymentController::class, 'edit2'])->name('paymentAdmin.edit');
    Route::patch('/paymentAdmin/update/{id}', [PaymentController::class, 'update2'])->name('paymentAdmin.update');
    Route::delete('/paymentAdmin/{id}', [PaymentController::class, 'destroy2'])->name('paymentAdmin.destroy');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
    Route::get('/laporan/edit/{id}', [LaporanController::class, 'edit'])->name('laporan.edit');
    Route::get('laporan/create', [LaporanController::class, 'create'])->name('laporan.create');
    Route::post('laporan/store', [LaporanController::class, 'store'])->name('laporan.store');
    Route::patch('/laporan/update/{id}', [LaporanController::class, 'update'])->name('laporan.update');
    Route::delete('/laporan/{id}', [LaporanController::class, 'destroy'])->name('laporan.destroy');
});

Route::middleware(['auth:admin', 'verified'])->group(function () {
    Route::get('/laporanAdmin', [LaporanController::class, 'index2'])->name('laporan.Admin');
    Route::get('/laporanAdmin/edit/{id}', [LaporanController::class, 'edit2'])->name('laporanAdmin.edit');
    Route::get('laporanAdmin/create', [LaporanController::class, 'create2'])->name('laporanAdmin.create');
    Route::post('laporanAdmin/store', [LaporanController::class, 'store2'])->name('laporanAdmin.store');
    Route::patch('/laporanAdmin/update/{id}', [LaporanController::class, 'update2'])->name('laporanAdmin.update');
    Route::delete('/laporanAdmin/{id}', [LaporanController::class, 'destroy2'])->name('laporanAdmin.destroy');
});

Route::get('/superadmin', function () {
    return view('Superadmin');
})->middleware(['auth', 'verified'])->name('superadmin');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/profileAdmin', [ProfileAdminController::class, 'edit'])->name('profileAdmin.edit');
    Route::patch('/profileAdmin', [ProfileAdminController::class, 'update'])->name('profileAdmin.update');
    Route::delete('/profileAdmin', [ProfileAdminController::class, 'destroy'])->name('profileAdmin.destroy');
});


//============customer=======================



Route::middleware('auth:customer')->group(function () {
    Route::get('/globalbook', [KamarController::class, 'index3'])->name('globalbook');
    
    
    Route::get('/globalbook/view/{id}', [KamarController::class, 'index4'])->name('globalbook.view');
    
    Route::post('/globalbook/checkout', [BookingController::class, 'index'])->name('globalbook.checkout');

    Route::post('/globalbook/pay', [BookingController::class, 'store'])->name('globalbook.pay');


    //Route::post('/globalbook/waitingpay', [BookingController::class, 'index2'])->name('globalbook.waitingpay');
    //Route::get('/globalbook/waitingpay', [BookingController::class, 'waitingPay'])->name('globalbook.waitingpay');

    Route::get('/globalbook/coba', function () {
        return view('allcustomer.book.coba');
    })->name('globalbook.coba');
    
    //Route::get('/globalbook/view/{id}', [LaporanController::class, 'edit'])->name('globalbook.view');
});

require __DIR__.'/auth.php';
