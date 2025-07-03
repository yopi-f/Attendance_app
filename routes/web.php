<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AttendanceController;
use carbon\Carbon;

Route::get('/', function () {
    return view('welcome');
});



Route::get('dailyreport.createpage', function () {
    $now = Carbon::now();
    return view('screenmoves.daily_report',compact('now'));
})->name('dailyreport.createpage');

Route::get('shareall.createpage', function () {
     $now = Carbon::now();
    return view('screenmoves.share_all',compact('now'));
})->name('shareall.createpage');
    

Route::get('/dashboard', function () {
    return view('auth.login');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('attendance',AttendanceController::class)->only(
    'index','store','show',
    );

});

require __DIR__.'/auth.php';
