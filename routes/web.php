<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',[ PageController::class, 'home' ])->name('home');
Route::get('profileEmp/{profileEmp:id}', [ PageController::class, 'profileEmp'])->name('profileEmp');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
