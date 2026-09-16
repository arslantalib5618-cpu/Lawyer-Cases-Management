<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LawCaseController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [LawCaseController::class, 'dashboard'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// frontend pages

Route::get( '/home'  , [HomeController::class, 'home'])->name('home');
Route::get( '/aboutLawyer'  , [HomeController::class, 'aboutLawyer'])->name('aboutLawyer');
Route::get( '/case'  , [HomeController::class, 'case'])->name('case');
Route::get( '/contact'  , [HomeController::class, 'contact'])->name('contact');
Route::get( '/detail/{id}'  , [HomeController::class, 'detail'])->name('detail');


Route::prefix('/dashboard')->middleware('auth' , 'verified')->group(function () {
     Route::get( '/case'  , [LawCaseController::class, 'caseIndex'])->name('case.index');
     Route::get( '/myCases'  , [LawCaseController::class, 'myCases'])->name('myCases');
     Route::get( '/case/create'  , [LawCaseController::class, 'caseCreate'])->name('case.create');
     Route::post( '/case/create/store'  , [LawCaseController::class, 'caseStore'])->name('case.store');
      Route::get( '/case/show/{id}'  , [LawCaseController::class, 'show'])->name('case.show');
      Route::get( '/mycase/{id}/edit'  , [LawCaseController::class, 'edit'])->name('case.edit');
       Route::put( '/mycase/{id}'  , [LawCaseController::class, 'update'])->name('case.update');
       Route::delete( '/mycase/{id}'  , [LawCaseController::class, 'destroy'])->name('case.destroy');
     Route::get( '/lawyer'  , [UserController::class, 'lawyerIndex'])->name('lawyer.index');

});


Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->name('logout');


require __DIR__.'/auth.php';
