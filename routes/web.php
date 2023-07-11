<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

    Route::middleware('guest2')->group(function () {
        Route::get('/login', [LoginController::class, 'login'])->name('login');
        Route::get('/signup', [LoginController::class, 'signup'])->name('signup');
    });

        Route::get('/login',[LoginController::class, 'login']) -> name('login');
        Route:: get('/signup',[LoginController::class, 'signup']) -> name('signup');
        Route::post('/add_user',[LoginController::class,'add_user'])->name('register_user');
        Route::post('/login_user',[LoginController::class,'login_user'])->name('userlogin');
        Route::get('/logout', [AuthController::class, 'logout'])->name('user.logout');


    Route::middleware('admin')->group(function () {
        Route::get('/adminhome', [AdminController::class, 'adminhome'])->name('adminhomeView');
        Route::get('/billingview', [AdminController::class, 'billingview'])->name('billingview');
        Route::get('/roomview', [AdminController::class, 'roomview'])->name('roomview');
        Route::get('/tenantview', [AdminController::class, 'tenantview'])->name('tenantview');
        Route::get('/transactionhistoryview', [AdminController::class, 'transactionhistoryview'])->name('transactionhistoryview');
        Route::get('edittenantinfo/{name}',[AdminController::class,'edittenantinfo'])->name('edittenantinfo');
        Route::put('updateinfo/{name}',[AdminController::class,'updateinfo'])->name('updateinfo');
        Route::delete('deleteinfo/{name}',[AdminController::class,'deleteinfo'])->name('deleteinfo');
        Route::get('savebill/{name}', [AdminController::class, 'savebill'])->name('savebill');
        Route::post('/setbill', [AdminController::class, 'setbill'])->name('setbill');
    });

    Route::middleware('user')->group(function () {
        Route::get('/userpayment', [UserController::class, 'userpayment'])->name('userpaymentView');
        Route::get('/userprofile', [UserController::class, 'userprofile'])->name('userprofileview');
        Route::get('/usertransactionhistory', [UserController::class, 'usertransactionhistory'])->name('UserTransactionHistory');
        Route::get('/addinfo', [UserController::class, 'addinfo'])->name('addinfo');
        Route::post('/addinformation', [UserController::class, 'addinformation'])->name('storeinformation');
        Route::get('paymentsection/{name}', [UserController::class, 'paymentsection'])->name('paymentsection');
        Route::post('/paymentth/{tenant}', [UserController::class, 'paymentth'])->name('paymentth');
    });
